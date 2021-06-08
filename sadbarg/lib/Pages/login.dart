import 'package:flutter/material.dart';
import 'package:sadbarg/Widgets/button.dart';

class Login extends StatefulWidget {
  @override
  _LoginState createState() => _LoginState();
}

class _LoginState extends State<Login> {
  final GlobalKey<FormFieldState<String>> _passwordFieldKey = GlobalKey<FormFieldState<String>>();

  String? _email;
  String? _password;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          leading: IconButton(
            icon: Icon(Icons.arrow_back_ios),
            onPressed: () {
              Navigator.pop(context);
            },
          ),
          title: Text("Login Page"),
        ),
        body: Container(
          height: MediaQuery.of(context).size.height,
          width: MediaQuery.of(context).size.width,
          child: ListView(children: [
            Padding(
              padding: const EdgeInsets.only(top: 50, left: 30),
              child: Container(
                child: Text(
                  "SignIn",
                  style: TextStyle(fontSize: 50, fontWeight: FontWeight.bold),
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.only(left: 30),
              child: Container(
                child: Text(
                  "please logged in",
                  style: TextStyle(
                      color: Colors.grey,
                      fontSize: 20,
                      fontWeight: FontWeight.w300,
                      decorationStyle: TextDecorationStyle.wavy),
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.only(top: 50, left: 30, right: 30),
              child: Container(
                child: TextField(
                  cursorColor: Colors.grey,
                  textCapitalization: TextCapitalization.words,
                  decoration: InputDecoration(
                    border: UnderlineInputBorder(),
                    filled: true,
                    labelText: "Email Address",
                  ),
                  keyboardType: TextInputType.emailAddress,
                  onSubmitted: (String value) {
                    this._email = value;
                    print('email=$_email');
                  },
                ),
              ),
            ),
            SizedBox(
              width: 20.0,
              height: 10.0,
            ),
            Padding(
              padding: const EdgeInsets.only(top: 5, left: 30, right: 30),
              child: Container(
                child: PasswordField(
                  fieldKey: _passwordFieldKey,
                  //helperText: 'No more than 8 characters.',
                  labelText: 'Password',
                  onFieldSubmitted: (String value) {
                    setState(() {
                      this._password = value;

                      print('password=$_password');
                    });
                  },
                ),
              ),
            ),
            SizedBox(
              width: 20.0,
              height: 10.0,
            ),
            Center(
              child: Button(
                text: "Login",
                onclick: () {
                  Navigator.push(context,
                      MaterialPageRoute(builder: (context) => Login()));
                },
              ),
            ),
          ]),
        ));
  }
}

class PasswordField extends StatefulWidget {
  const PasswordField({
    required this.fieldKey,
    required this.hintText,
    required this.labelText,
    required this.helperText,
    required this.onSaved,
    this.validator,
    required this.onFieldSubmitted,
  });

  final Key fieldKey;
  final String hintText;
  final String labelText;
  final String helperText;
  final FormFieldSetter<String> onSaved;
  final FormFieldValidator<String> validator;
  final ValueChanged<String> onFieldSubmitted;

  @override
  _PasswordFieldState createState() => _PasswordFieldState();
}

class _PasswordFieldState extends State<PasswordField> {
  bool _obscureText = true;

  @override
  Widget build(BuildContext context) {
    return TextFormField(
      key: widget.fieldKey,
      obscureText: _obscureText,
      onSaved: widget.onSaved,
      validator: widget.validator,
      onFieldSubmitted: widget.onFieldSubmitted,
      decoration: InputDecoration(
        border: const UnderlineInputBorder(),
        filled: true,
        hintText: widget.hintText,
        labelText: widget.labelText,
        helperText: widget.helperText,
        suffixIcon: GestureDetector(
          onTap: () {
            setState(() {
              _obscureText = !_obscureText;
            });
          },
          child: Icon(
            _obscureText ? Icons.visibility : Icons.visibility_off,
            color: Colors.black38,
          ),
        ),
      ),
    );
  }
}
