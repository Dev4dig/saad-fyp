import 'package:flutter/material.dart';

// ignore: must_be_immutable
class Button extends StatefulWidget {
  int btnWidth = 120;
  int btnHeight = 30;
  Function onclick;
  String text;

  Button({this.onclick, this.text});
  Button.customDim({this.onclick, this.text, this.btnHeight, this.btnWidth});

  @override
  _ButtonState createState() => _ButtonState();
}

class _ButtonState extends State<Button> {
  @override
  Widget build(BuildContext context) {
    return ElevatedButton(
      onPressed: widget.onclick,
      child: Text(
        widget.text,
        style: TextStyle(
          color: Colors.black,
          fontSize: 25,
        ),
      ),
      style: ButtonStyle(
        foregroundColor: MaterialStateProperty.all<Color>(Colors.blue),
      ),
    );
  }
}
