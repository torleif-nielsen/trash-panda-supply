module.exports = {
  paths: { public: "static" }, 
  files: {
    javascripts: { joinTo: 'app.js' },
    stylesheets: { joinTo: "app.css" }
  },
  plugins: {
    sass: {
      options: {
        includePaths: [
          "node_modules/material-design-lite/src"
        ]
      }
    }
  }
}
