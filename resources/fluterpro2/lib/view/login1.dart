import 'dart:convert';

import 'package:fluterpro2/Api/loginservices.dart';
import 'package:fluterpro2/Api/prueba.dart';
import 'package:fluterpro2/view/login.dart';
import 'package:fluterpro2/view/mostraragenda.dart';
import 'package:fluterpro2/view/pueba1.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:shared_preferences/shared_preferences.dart';

class login1 extends StatefulWidget {
  login1({Key? key}) : super(key: key);

  @override
  _login1State createState() => _login1State();
}

class _login1State extends State<login1> {
  TextEditingController email = TextEditingController();
  TextEditingController password = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Login"),
      ),
      body: Container(
          decoration: BoxDecoration(
              image: DecorationImage(
                  image: NetworkImage(
                      "https://i.blogs.es/f81fd9/zedge60/240_240.jpg"),
                  fit: BoxFit.cover)),
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              nombre(),
              SizedBox(
                height: 65,
              ),
              campousuario(),
              SizedBox(
                height: 65,
              ),
              campopassword(),
              SizedBox(
                height: 65,
              ),
              botonentrar(),
            ],
          )),
    );
  }

  Widget nombre() {
    return Text(
      "Login",
      style: TextStyle(
          color: Colors.white, fontSize: 35.0, fontWeight: FontWeight.bold),
    );
  }

  Widget campousuario() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 10, vertical: 3),
      child: TextField(
        controller: email,
        decoration: InputDecoration(
          hintText: "User",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget campopassword() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 10, vertical: 3),
      child: TextField(
        controller: password,
        obscureText: true,
        decoration: InputDecoration(
          hintText: "Password",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget botonentrar() {
    return FlatButton(
        color: Colors.blueAccent,
        padding: EdgeInsets.symmetric(horizontal: 35, vertical: 13),
        onPressed: () {
          _login();
        },
        child: Text(
          "login",
          style: TextStyle(color: Colors.white, fontSize: 25),
        ));
  }

  void _login() async {
    //validacion aqui se hace
    var datos = {'email': email.text, 'password': password.text};
    var respuesta = await Api().login(datos, "login1");
    var contenido = json.decode(respuesta.body);
    if (contenido['success']) {
      SharedPreferences login = await SharedPreferences.getInstance();
      login.setString("token", contenido['token']);
      login.setString("user", json.encode(contenido['user']));

      Navigator.of(context)
          .push(MaterialPageRoute(builder: (BuildContext) => mostraragenda()));
    } else {
      print(contenido['mensaje']);
    }
  }
}
