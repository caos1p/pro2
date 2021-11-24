import 'package:fluterpro2/view/login.dart';
import 'package:fluterpro2/view/login1.dart';
import 'package:fluterpro2/view/pueba1.dart';
import 'package:fluterpro2/view/registropaciente.dart';
import 'package:flutter/material.dart';

void main() => runApp(MiApp());

class MiApp extends StatelessWidget {
  const MiApp({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "Mi App",
      home: Inicio(),
    );
  }
}

class Inicio extends StatefulWidget {
  Inicio({Key? key}) : super(key: key);

  @override
  _InicioState createState() => _InicioState();
}

class _InicioState extends State<Inicio> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title:
            Text("Inicio", style: TextStyle(color: Colors.black, fontSize: 25)),
        backgroundColor: Colors.blue,
      ),
      body: Container(
        decoration: BoxDecoration(
          image: DecorationImage(
              image: NetworkImage(
                  "https://thumbs.dreamstime.com/b/emparede-el-concepto-del-andidea-de-los-fondos-color-azul-y-verde-cemento-128954617.jpg"),
              fit: BoxFit.cover),
        ),
        child: Center(
          child: Row(
            crossAxisAlignment: CrossAxisAlignment.center,
            mainAxisAlignment: MainAxisAlignment.spaceAround,
            children: <Widget>[
              RaisedButton(
                  color: Colors.cyan[50],
                  padding: EdgeInsets.symmetric(horizontal: 35, vertical: 15),
                  child: Text("Login",
                      style: TextStyle(color: Colors.black, fontSize: 25)),
                  onPressed: () {
                    Navigator.push(context,
                        MaterialPageRoute(builder: (context) => login1()));
                  }),
              RaisedButton(
                  color: Colors.red[200],
                  padding: EdgeInsets.symmetric(horizontal: 35, vertical: 13),
                  child: Text("Registrar",
                      style: TextStyle(color: Colors.white, fontSize: 25)),
                  onPressed: () {
                    Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) => registropaciente()));
                  })
            ],
          ),
        ),
      ),
    );
  }
}
