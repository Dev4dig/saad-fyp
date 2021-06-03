import 'package:flutter/material.dart';
import 'package:sadbarg/Widgets/button.dart';

// ignore: must_be_immutable
class Post extends StatelessWidget {
  String? name;
  String? department;
  int? rating;
  String? content;
   final VoidCallback onClick;
  Post({
    required this.onClick,
    this.name,
    this.department,
    this.content,
    this.rating,
  });

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
      height: 220,
      width: 400,
      decoration: BoxDecoration(
        color: Colors.white,
        boxShadow: [
          BoxShadow(
            color: Colors.grey.withOpacity(0.5),
            spreadRadius: 2,
            blurRadius: 2,
            offset: Offset(0, 3), // changes position of shadow
          ),
        ],
        borderRadius: BorderRadius.all(Radius.circular(10)),
      ),
      margin: EdgeInsets.only(top: 10, left: 5, right: 5),
      child: Column(children: [
        Row(
          children: [
            Padding(
              padding: const EdgeInsets.only(left: 5),
              child: Text(
                "Farhan Ali",
                style: TextStyle(
                  fontSize: 20,
                ),
              ),
            ),
            SizedBox(
              width: 180,
            ),
            Text(
              "Department",
              style: TextStyle(
                fontSize: 20,
              ),
            ),
          ],
        ),
        SizedBox(
          height: 5,
        ),
        Stack(
          children: [
            Container(
              margin: EdgeInsets.only(top: 120, left: 235),
              child: Button.customDim(
                  btnWidth: 30,
                  btnHeight: 20,
                  onclick: onClick,
                  text: "View Full Article"),
            )
          ],
        ),
        SizedBox(
          height: 5,
        ),
        Row(children: [
          Padding(
            padding: const EdgeInsets.only(left: 5),
            child: Text(
              "From IR",
              style: TextStyle(
                fontSize: 20,
              ),
            ),
          ),
          SizedBox(width: 100),
          Icon(
            Icons.done,
          ),
          SizedBox(width: 100),
          Text(
            "Rating",
            style: TextStyle(
              fontSize: 20,
            ),
          ),
        ])
      ]),
    ),
    );
  }


}

 