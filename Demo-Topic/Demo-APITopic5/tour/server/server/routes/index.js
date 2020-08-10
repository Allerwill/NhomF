const tourRoute = require('./tours')

module.exports = app => {
  app.use('/tours', tourRoute)

  app.get('/', (req, res) => {
    res.send('Hello')
  })
  return app
}