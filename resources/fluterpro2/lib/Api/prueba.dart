import 'dart:convert';

import 'package:http/http.dart' as http;

class Api {
  final String _dominio = "192.168.100.188:8000";
  final String _url1 = "/api/auth/";

  registro(_data, String _url2) async {
    var ruta = _url1 + _url2;
    return await http
        .post(Uri.http(_dominio, ruta), body: json.encode(_data), headers: {
      'Content-type': 'aplication/json',
      'Acept': 'aplication/json',
    });
  }

  login(_data, String _url2) async {
    var ruta = _url1 + _url2;
    return await http
        .post(Uri.http(_dominio, ruta), body: json.encode(_data), headers: {
      'Content-type': 'aplication/json',
      'Acept': 'aplication/json',
    });
  }

  registropaciente(_data, String _url2) async {
    var ruta = _url1 + _url2;
    return await http
        .post(Uri.http(_dominio, ruta), body: json.encode(_data), headers: {
      'Content-type': 'aplication/json',
      'Acept': 'aplication/json',
    });
  }
}
