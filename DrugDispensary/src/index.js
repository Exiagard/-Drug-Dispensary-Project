 const express = require('express');
 /*
 const mysql = require('mysql2');

 const connection = mysql.createConnection({
 	host: '127.0.0.1',
 	port: '3306',
 	user: 'root',
 	password: '',
 	database: 'drugdispensarydatabase'
 });

 try{
 	connection.connect();
 } catch(e){
 	console.log('Connection to MySQL failed.');
 	console.log(e);
 }
 */
 const api = express();
 api.use(express.static(__dirname + '/public/NewCode/Code/Doctor/DoctorRegister.php'));

 api.listen(3000, () => {
 	console.log("API Running Successfully");
 });


api.get('/', (req,res) => {
	console.log(req);
	res.send("Hello, World!");
});


/*
api.post('/add', (req,res) => {
    console.log('Post Request Received');
    res.send('It Works!');

    connection.query('INSERT INTO tasks (description) VALUES (?)',[req.body.item],(error,results)=>{
    	if(error) return res.json({error:error});

    	console.log(results);
    });
});*/
