from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flask import request, jsonify

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:////site.db'  # Use SQLite for simplicity
db = SQLAlchemy(app)

class User(db.Model):
  id = db.Column(db.Integer, primary_key=True)
  name = db.Column(db.String(50), nullable=False)
  email = db.Column(db.String(120), unique=True, nullable=False)

@app.route('/user', methods=['GET'])
def get_user():
  cnr_no = request.args.get('cnr_no', default = 1, type = int)
  user = User.query.get(cnr_no)
  if user is not None:
    return jsonify({"id": user.id, "name": user.name, "email": user.email})
  else:
    return jsonify({"error": "User not found"}), 404
# Create the database and the table
with app.app_context():
    db.create_all()
    
import random
from flask import jsonify
from flask import request

@app.route('/create_user', methods=['POST'])
def create_user():
  cnr_no = request.form.get('cnr_no')  # Get the cnr_no from the form data
  new_user = User(id=cnr_no, name="User"+str(cnr_no), email="user"+str(cnr_no)+"@example.com")
  db.session.add(new_user)
  db.session.commit()
  return jsonify({"message": "User created", "cnr_no": cnr_no}), 201

from flask import render_template

@app.route('/cnr_no', methods=['GET'])
def cnr_no():
    return render_template('cnr_no.html')

if __name__ == "__main__":
    app.run(debug=True)