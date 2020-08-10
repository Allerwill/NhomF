const sql = require("./db.js")

// constructor
const Tour = function (tour) {
  this.ten = tour.ten
  this.img = tour.img
  this.gia = tour.gia
  this.info = tour.info
}

Tour.create = (newTour, result) => {
  sql.query("INSERT INTO tours SET ?", newTour, (err, res) => {
    if (err) {
      console.log("error: ", err)
      result(err, null)
      return
    }

    console.log("created tour: ", { id: res.insertId, ...newTour })
    result(null, { id: res.insertId, ...newTour })
  })
}

Tour.findById = (tourId, result) => {
  sql.query(`SELECT * FROM tours WHERE id = ${tourId}`, (err, res) => {
    if (err) {
      console.log("error: ", err)
      result(err, null)
      return
    }

    if (res.length) {
      console.log("found tour: ", res[0])
      result(null, res[0])
      return
    }

    // not found Tour with the id
    result({ kind: "not_found" }, null)
  })
}

Tour.getAll = result => {
  sql.query("SELECT * FROM tours", (err, res) => {
    if (err) {
      console.log("error: ", err)
      result(null, err)
      return
    }

    console.log("tours: ", res)
    result(null, res)
  })
}

Tour.updateById = (id, tour, result) => {
  sql.query(
    "UPDATE tours SET ten = ?, img = ?, gia = ?, info = ? WHERE id = ?",
    [tour.ten, tour.img, tour.gia, tour.info, id],
    (err, res) => {
      if (err) {
        console.log("error: ", err)
        result(null, err)
        return
      }

      if (res.affectedRows == 0) {
        // not found Tour with the id
        result({ kind: "not_found" }, null)
        return
      }

      console.log("updated tour: ", { id: id, ...tour })
      result(null, { id: id, ...tour })
    }
  )
}

Tour.remove = (id, result) => {
  sql.query("DELETE FROM tours WHERE id = ?", id, (err, res) => {
    if (err) {
      console.log("error: ", err)
      result(null, err)
      return
    }

    if (res.affectedRows == 0) {
      // not found Tour with the id
      result({ kind: "not_found" }, null)
      return
    }

    console.log("deleted tour with id: ", id)
    result(null, res)
  })
}

Tour.removeAll = result => {
  sql.query("DELETE FROM tours", (err, res) => {
    if (err) {
      console.log("error: ", err)
      result(null, err)
      return
    }

    console.log(`deleted ${res.affectedRows} tours`)
    result(null, res)
  })
}

module.exports = Tour