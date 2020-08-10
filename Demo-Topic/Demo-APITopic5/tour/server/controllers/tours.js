const fs = require('fs')
const path = require('path')

const Tour = require("../models/Tour.js")

// create a new tour
const createOne = (req, res) => {
  if (!req.body && !req.file) {
    res.status(400).send({
      message: "Content can not be empty!"
    })
  }

  const { ten, gia, info } = req.body

  // Create a Tour
  const tour = new Tour({
    ten,
    gia,
    img: `/images/${req.file.filename}`,
    info
  })

  // Save Tour in the database
  Tour.create(tour, (err, data) => {
    if (err)
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the tour."
      })
    else res.json(data)
  })
}

// get all tours from the database.
const findAll = (req, res) => {
  Tour.getAll((err, data) => {
    if (err)
      res.status(500).send({
        message:
          err.message || "Some error occurred while retrieving tours."
      })
    else res.send(data)
  })
}

// find a single tour with a tourId
const findOne = (req, res) => {
  Tour.findById(req.params.tourId, (err, data) => {
    if (err) {
      if (err.kind === "not_found") {
        res.status(404).send({
          message: `Not found tour with id ${req.params.tourId}.`
        })
      } else {
        res.status(500).send({
          message: "Error retrieving tour with id " + req.params.tourId
        })
      }
    } else res.send(data)
  })
}

// Update a tour identified by the tourId in the request
const updateOne = async (req, res) => {
  if (!req.body) {
    res.status(400).send({
      message: "Content can not be empty!"
    })
  }

  const { tourId } = req.params
  const { ten, gia, info } = req.body
  const img = req.file ? req.file.filename : req.body.img

  if (req.file) {
    fs.unlink(path.join('public', req.body.img), err => {
      if (err) throw err
    })
  }

  // update tour
  Tour.updateById(
    tourId,
    new Tour({
      ten,
      img: req.file ? `/images/${img}` : img,
      gia,
      info
    }),
    (err, data) => {
      if (err) {
        if (err.kind === "not_found") {
          res.status(404).send({
            message: `Not found Customer with id ${tourId}.`
          })
        } else {
          res.status(500).send({
            message: "Error updating Customer with id " + tourId
          })
        }
      } else res.send(data)
    }
  )
}

// Delete a tour with the specified tourId in the request
const deleteOne = (req, res) => {
  const { tourId } = req.params
  Tour.findById(tourId, (err, data) => {
    if (err) {
      if (err.kind === "not_found") {
        res.status(404).send({
          message: `Not found tour with id ${tourId}.`
        })
      } else {
        res.status(500).send({
          message: "Error retrieving tour with id " + tourId
        })
      }
    } else {
      // remove image
      fs.unlink(path.join('public', data.img), err => {
        if (err) throw err
        Tour.remove(tourId, (err, data) => {
          if (err) {
            if (err.kind === "not_found") {
              res.status(404).send({
                message: `Not found tour with id ${tourId}.`
              })
            } else {
              res.status(500).send({
                message: "Could not delete tour with id " + tourId
              })
            }
          } else res.json({ message: `Tour was deleted successfully!`, success: true })
        })
      })
    }
  })
}

// Delete all tours from the database.
const deleteAll = (req, res) => {
  let directory = path.join('public', 'images')

  fs.readdir(directory, (err, files) => {
    if (err) throw err;

    for (const file of files) {
      fs.unlink(path.join(directory, file), err => {
        if (err) throw err;
      })
    }

    Tour.removeAll((err, data) => {
      if (err)
        res.status(500).send({
          message:
            err.message || "Some error occurred while removing all customers."
        })
      else res.send({ message: `All Customers were deleted successfully!` })
    })
  })
}

module.exports = {
  createOne,
  findAll,
  findOne,
  updateOne,
  deleteOne,
  deleteAll
}