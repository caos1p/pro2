import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class registrohorario extends StatefulWidget {
  registrohorario({Key? key}) : super(key: key);

  @override
  _registrohorarioState createState() => _registrohorarioState();
}

class _registrohorarioState extends State<registrohorario> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
      title: Text("Registro Horario "),
    ));
  }
}
