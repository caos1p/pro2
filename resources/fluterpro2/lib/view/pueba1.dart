import 'dart:convert';
import 'package:fluterpro2/Api/prueba.dart';
import 'package:fluterpro2/view/login.dart';
import 'package:fluterpro2/view/login1.dart';
import 'package:flutter/material.dart';
import 'package:shared_preferences/shared_preferences.dart';

class rol extends StatefulWidget {
  rol({Key? key}) : super(key: key);

  @override
  _rolState createState() => _rolState();
}

class _rolState extends State<rol> {
  @override
  TextEditingController _nombre = TextEditingController();
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("rol"),
      ),
      body: Container(
          child: Column(
        children: [
          TextField(controller: _nombre),
          FlatButton(
              onPressed: () {
                _registro();
              },
              child: Text("registrar"))
        ],
      )),
    );
  }

  void _registro() async {
    //validacion aqui se hace
    var datos = {
      'nombre': _nombre.text,
    };
    var respuesta = await Api().registro(datos, "register");
    var contenido = json.decode(respuesta.body);
    if (contenido['user'] != null) {
      Navigator.pushReplacement(
          context, MaterialPageRoute(builder: (context) => login1()));
    } else {
      print(contenido['mensaje']);
    }
  }
}
