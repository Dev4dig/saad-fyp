import 'package:flutter/material.dart';

// ignore: must_be_immutable
class Button extends StatelessWidget {
  int? btnWidth = 120;
  int? btnHeight = 30;
  final VoidCallback onclick;
  String text;

  Button({required this.onclick, required this.text});
  Button.customDim({required this.onclick, required this.text, this.btnHeight, this.btnWidth});

   @override
  Widget build(BuildContext context) {
    return ElevatedButton(
      onPressed: onclick,
      child: Text(text
        ,
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

