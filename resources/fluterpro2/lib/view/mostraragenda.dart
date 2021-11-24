import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class mostraragenda extends StatefulWidget {
  mostraragenda({Key? key}) : super(key: key);

  @override
  _mostraragendaState createState() => _mostraragendaState();
}

class _mostraragendaState extends State<mostraragenda> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text("agenda",
              style: TextStyle(color: Colors.black, fontSize: 25)),
          backgroundColor: Colors.blue,
        ),
        body: Container(
          decoration: BoxDecoration(
            image: DecorationImage(
                image: NetworkImage(
                    "https://thumbs.dreamstime.com/b/emparede-el-concepto-del-andidea-de-los-fondos-color-azul-y-verde-cemento-128954617.jpg"),
                fit: BoxFit.cover),
          ),
        ));
  }
}
