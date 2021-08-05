import 'package:flutter/material.dart';
import 'package:sadbarg/Pages/login.dart';

class Cardd extends StatefulWidget {
  @override
  _CarddState createState() => _CarddState();
}

class _CarddState extends State<Cardd> {
  bool _showPassword = false;
  bool isVisible = true;

  String? _name;
  String? _phoneNumber;
  String? _email;
  String? _password;
final GlobalKey<FormFieldState<String>> _passwordFieldKey = GlobalKey<FormFieldState<String>>();
  String _validateName(String? value) {
    if (value != null) {
      if (value.isEmpty) return 'Name is required.';
    }
    final RegExp nameExp = RegExp(r'^[A-Za-z ]+$');
    if (value != null) {
      if (!nameExp.hasMatch(value)) {
        return 'Please enter only alphabetical characters.';
      }
    }
    return "ok";
  }

  @override
  Widget build(BuildContext context) {
    return ListView(
      children: [
        Padding(
          padding: const EdgeInsets.only(left: 30, right: 30),
          child: TextFormField(
            textCapitalization: TextCapitalization.words,
            decoration: const InputDecoration(
              border: UnderlineInputBorder(),
              filled: true,
              //icon: Icon(Icons.person),
              hintText: "Username",
              labelText: "Name",
            ),
            onSaved: (String? value) {
              this._name = value;
              print('name=$_name');
            },
            validator: _validateName,
          ),
        ),
        SizedBox(
          width: 20.0,
          height: 2.0,
        ),
        Visibility(
          visible: isVisible,
          child: Padding(
            padding: const EdgeInsets.only(left: 30, right: 30),
            child: TextFormField(
              textCapitalization: TextCapitalization.words,
              decoration: const InputDecoration(
                border: UnderlineInputBorder(),
                filled: true,
                //icon: Icon(Icons.add_box_sharp),
                hintText: "Roll No",
                labelText: "Roll No",
              ),
              keyboardType: TextInputType.phone,
            ),
          ),
        ),
        SizedBox(
          width: 20.0,
          height: 2.0,
        ),
        Padding(
          padding: const EdgeInsets.only(left: 30, right: 30),
          child: TextFormField(
            textCapitalization: TextCapitalization.words,
            decoration: const InputDecoration(
              border: UnderlineInputBorder(),
              filled: true,
              //icon: Icon(Icons.remove_red_eye),
              hintText: "Department",
              labelText: "Department",
            ),
          ),
        ),
        SizedBox(
          width: 20.0,
          height: 2.0,
        ),
        Padding(
          padding: const EdgeInsets.only(left: 30, right: 30),
          child: TextFormField(
            textCapitalization: TextCapitalization.words,
            decoration: const InputDecoration(
              border: UnderlineInputBorder(),
              filled: true,
              hintText: "Mobile No",
              labelText: "Mobile No",
            ),
            keyboardType: TextInputType.phone,
            onSaved: (String? value) {
              this._phoneNumber = value;
              print('phoneNumber=$_phoneNumber');
            },
          ),
        ),
        SizedBox(
          width: 20.0,
          height: 2.0,
        ),
        Padding(
          padding: const EdgeInsets.only(left: 30, right: 30),
          child: TextFormField(
            textCapitalization: TextCapitalization.words,
            decoration: const InputDecoration(
              border: UnderlineInputBorder(),
              filled: true,
              //icon: Icon(Icons.remove_red_eye),
              hintText: "Email Address",
              labelText: "Email Address",
            ),
            keyboardType: TextInputType.emailAddress,
            onSaved: (String? value) {
              this._email = value;
              print('email=$_email');
            },
          ),
        ),
        SizedBox(
          width: 20.0,
          height: 2.0,
        ),
        Padding(
          padding: const EdgeInsets.only(left: 30, right: 30),
          child: PasswordField(
            helperText: 'No more than 8 characters.',
            hintText: "",
            fieldKey: _passwordFieldKey,
            labelText: 'Password',
            onSaved: (String? a){},
            onFieldSubmitted: (String value) {
              setState(() {
                this._showPassword = !this._showPassword;
                this._password = value;

                print('password=$_password');
              });
            },
          ),
        ),
        SizedBox(
          width: 20.0,
          height: 2.0,
        ),
        Center(
          child: ElevatedButton(
            onPressed: () {},
            child: Text(
              "SignUp",
              style: TextStyle(
                fontSize: 20.0,
              ),
            ),
          ),
        )
      ],
    );
  }
}
