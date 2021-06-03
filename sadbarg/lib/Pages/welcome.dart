import 'package:flutter/material.dart';
import 'package:sadbarg/Pages/login.dart';
import 'package:sadbarg/Pages/signup.dart';
import 'package:sadbarg/Widgets/button.dart';

class Welcome extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: "Magazine",
      home: Material(
          child: Scaffold(
        backgroundColor: Colors.lightBlueAccent.shade200,
        body: Column(
          mainAxisAlignment: MainAxisAlignment.start,
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Container(
                margin: EdgeInsets.only(left: 10, top: 80),
                child: Text(
                  "Hello!",
                  style: TextStyle(
                    fontSize: 100.0,
                    fontStyle: FontStyle.italic,
                    fontWeight: FontWeight.w900,
                  ),
                )),
            Container(
              margin: EdgeInsets.only(left: 10, right: 30),
              child: Text(
                "Welcome to the \n \t \t Magzine",
                style: TextStyle(
                  color: Colors.black,
                  fontSize: 40.0,
                  fontStyle: FontStyle.italic,
                  fontWeight: FontWeight.w400,
                ),
              ),
            ),
            SizedBox(height: 130),
            Container(
              child: Center(
                child: Button(
                  text: "Login",
                  onclick: () {
                    Navigator.push(context,
                        MaterialPageRoute(builder: (context) => Login()));
                  },
                ),
              ),
            ),
            SizedBox(
              height: 10,
            ),
            Container(
              child: Center(
                child: Button(
                  text: "SignUp",
                  onclick: () {
                    Navigator.push(context,
                        MaterialPageRoute(builder: (context) => SignUp()));
                  },
                ),
              ),
            ),
          ],
        ),
      )),
    );
  }
}
