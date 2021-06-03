import 'package:flutter/material.dart';
import 'package:sadbarg/Widgets/cardd.dart';

class SignUp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return SignUpStudent();
  }
}

class SignUpStudent extends StatefulWidget {
  @override
  _SignUpStudentState createState() => _SignUpStudentState();
}

class _SignUpStudentState extends State<SignUpStudent> {
  @override
  Widget build(BuildContext context) {
    final _kTabPages = <Widget>[Cardd(), Cardd()];
    final _kTabs = <Tab>[
      Tab(
        text: "Student",
      ),
      Tab(
        text: "Teacher",
      ),
    ];
    return Material(
      child: Scaffold(
        appBar: AppBar(
          leading: IconButton(
              icon: Icon(Icons.arrow_back_ios),
              onPressed: () {
                Navigator.pop(context);
              }),
          title: Text("Signup Page"),
        ),
        body: ListView(children: [
          Padding(
            padding: const EdgeInsets.only(left: 30, top: 40),
            child: Container(
              child: Text(
                "SignUp",
                style: TextStyle(fontSize: 50, fontWeight: FontWeight.bold),
              ),
            ),
          ),
          Padding(
            padding: const EdgeInsets.only(left: 30),
            child: Container(
              child: Text(
                "please register!",
                style: TextStyle(
                    color: Colors.grey,
                    fontSize: 20,
                    fontWeight: FontWeight.w300,
                    decorationStyle: TextDecorationStyle.wavy),
              ),
            ),
          ),
          SizedBox(
            width: 20.0,
            height: 50.0,
          ),
          Container(
              height: 40,
              width: 100,
              child: DefaultTabController(
                  length: _kTabs.length,
                  child: TabBarView(children: _kTabPages)))
        ]),
      ),
    );
  }
}
