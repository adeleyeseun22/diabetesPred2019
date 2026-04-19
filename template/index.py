#!C:/Python27/python.exe
from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
  	return "Hello from FaskCGI via IIS!"

if __name__ == "__main__":
  	app.run()  