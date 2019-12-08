var express = require('express');
var router = express.Router();
var path = require('path');

const sql = require('../utils/sql.js');

// /* GET home page. */
// router.get('/', function(req, res, next) {
//   // res.render('index', { title: 'Express' });
//   console.log('sent some info'),
//   res.sendFile((path.join(__dirname, "../views/index.html")));
// });

router.get('/', (req, res) => {
  // here is where we set up the query 
  // let query = `SELECT Id * FROM tbl_content WHERE id="${req.params.target}"`;

  let query = "SELECT Id, Images, Headings, Copy, video FROM tbl_content";

  sql.query(query, (err, result) => {
    if (err) console.log(err); //something broke?!

    console.log(result); // this should be the database row 

    res.render("layout", {data:result}); // send that row back to the calling function
  })
})

module.exports = router;
