import 'dart:convert';

import 'package:fluterpro2/Api/prueba.dart';
import 'package:fluterpro2/view/login1.dart';
import 'package:fluterpro2/view/registrohorario.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class registropaciente extends StatefulWidget {
  registropaciente({Key? key}) : super(key: key);

  @override
  _registropacienteState createState() => _registropacienteState();
}

class _registropacienteState extends State<registropaciente> {
  @override
  TextEditingController _nombre = TextEditingController();
  TextEditingController _ci = TextEditingController();
  TextEditingController _apellidomaterno = TextEditingController();
  TextEditingController _apellidopaterno = TextEditingController();
  TextEditingController _pais = TextEditingController();
  TextEditingController _email = TextEditingController();
  TextEditingController _password = TextEditingController();
  TextEditingController _direccion = TextEditingController();
  TextEditingController _telefono = TextEditingController();
  TextEditingController _genero = TextEditingController();
  TextEditingController _fechadenacimiento = TextEditingController();

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Registro "),
      ),
      body: Container(
          color: Colors.black87,
          child: ListView(
            children: [
              SizedBox(
                height: 35,
              ),
              titulo(),
              SizedBox(
                height: 35,
              ),
              nombre(),
              SizedBox(
                height: 15,
              ),
              ci(),
              SizedBox(
                height: 15,
              ),
              apellidopaterno(),
              SizedBox(
                height: 15,
              ),
              apellidomaterno(),
              SizedBox(
                height: 15,
              ),
              telefono(),
              SizedBox(
                height: 15,
              ),
              email(),
              SizedBox(
                height: 15,
              ),
              fechadenacimiento(),
              SizedBox(
                height: 15,
              ),
              genero(),
              SizedBox(
                height: 35,
              ),
              titulodireccion(),
              SizedBox(
                height: 15,
              ),
              direccion(),
              SizedBox(
                height: 15,
              ),
              pais(),
              SizedBox(
                height: 35,
              ),
              tituloUsuario(),
              SizedBox(
                height: 15,
              ),
              email(),
              SizedBox(
                height: 15,
              ),
              password(),
              SizedBox(
                height: 35,
              ),
              botonentrar(),
              SizedBox(
                height: 25,
              ),
            ],
          )),
    );
  }

  Widget titulo() {
    return Text(
      "Registro De Paciente",
      textAlign: TextAlign.center,
      style: TextStyle(
          color: Colors.white, fontSize: 35.0, fontWeight: FontWeight.bold),
    );
  }

  Widget titulodireccion() {
    return Text(
      "Direccion",
      textAlign: TextAlign.left,
      style: TextStyle(
          color: Colors.white, fontSize: 20.0, fontWeight: FontWeight.bold),
    );
  }

  Widget tituloUsuario() {
    return Text(
      "Usuario",
      textAlign: TextAlign.left,
      style: TextStyle(
          color: Colors.white, fontSize: 20.0, fontWeight: FontWeight.bold),
    );
  }

  Widget nombre() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _nombre,
        decoration: InputDecoration(
          hintText: "nombre",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget ci() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _ci,
        keyboardType: TextInputType.number,
        decoration: InputDecoration(
          hintText: "ci",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget apellidopaterno() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _apellidopaterno,
        decoration: InputDecoration(
          hintText: "apellidopaterno",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget apellidomaterno() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _apellidomaterno,
        decoration: InputDecoration(
          hintText: "apellidomaterno",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget email() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _email,
        keyboardType: TextInputType.emailAddress,
        decoration: InputDecoration(
          hintText: "email",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget password() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _password,
        obscureText: true,
        keyboardType: TextInputType.visiblePassword,
        decoration: InputDecoration(
          hintText: "password",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget direccion() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _direccion,
        decoration: InputDecoration(
          hintText: "direccion",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget fechadenacimiento() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _fechadenacimiento,
        keyboardType: TextInputType.datetime,
        decoration: InputDecoration(
          hintText: "fechadenacimiento",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget telefono() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _telefono,
        keyboardType: TextInputType.number,
        decoration: InputDecoration(
          hintText: "telefono",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget pais() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _pais,
        decoration: InputDecoration(
          hintText: "pais",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget genero() {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 23, vertical: 3),
      child: TextField(
        controller: _genero,
        decoration: InputDecoration(
          hintText: "genero",
          fillColor: Colors.white,
          filled: true,
        ),
      ),
    );
  }

  Widget botonentrar() {
    return FlatButton(
        color: Colors.blueAccent,
        padding: EdgeInsets.symmetric(horizontal: 50, vertical: 13),
        onPressed: () {
          _registropaciente();
        },
        child: Text(
          "Entrar",
          style: TextStyle(color: Colors.white, fontSize: 25),
        ));
  }

  void _registropaciente() async {
    //validacion aqui se hace
    var datos = {
      'nombre': _nombre.text,
      'ci': _ci.text,
      'apellidopaterno': _apellidopaterno.text,
      'apellidomaterno': _apellidomaterno.text,
      'telefono': _telefono.text,
      'direccion': _direccion.text,
      'genero': _genero.text,
      'pais': _pais.text,
      'email': _email.text,
      'password': _password.text,
      'fechadenacimiento': _fechadenacimiento.text,
    };
    var respuesta = await Api().registropaciente(datos, "registropaciente");
    var contenido = json.decode(respuesta.body);
    if (contenido['user'] != null) {
      Navigator.pushReplacement(
          context, MaterialPageRoute(builder: (context) => registrohorario()));
    } else {
      print(contenido['mensaje']);
    }
  }
}
