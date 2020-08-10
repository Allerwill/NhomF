const router = require('express').Router()
const multer = require('multer')
const path = require('path')

const uploadPath = path.join('public', 'images')
const upload = multer({ dest: uploadPath })

const { tourController } = require('../controllers')

// create a new tour
router.post("/", upload.single('image'), tourController.createOne)

// get all tours
router.get("/", tourController.findAll)

// get a single tour with tourId
router.get("/:tourId", tourController.findOne)

// update a Customer with tourId
router.put("/:tourId", upload.single('image'), tourController.updateOne)

// delete a Customer with tourId
router.delete("/:tourId", tourController.deleteOne)

// dell all tours
router.delete("/", tourController.deleteAll)

module.exports = router