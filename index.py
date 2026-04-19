from flask import Flask,render_template, request, redirect, url_for, session, flash, json
from flask_bootstrap import Bootstrap
from flask_mysqldb import MySQL
import MySQLdb.cursors
import re
import pandas as pd
import numpy as np
from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, BooleanField, IntegerField, FloatField, validators
from wtforms.validators import InputRequired, Email, Length
from sklearn.model_selection import train_test_split
from sklearn.neighbors import KNeighborsClassifier



diabetes = pd.read_csv('diabetesmerge.csv')
#del diabetes['DiabetesPedigreeFunction']
print(diabetes.info())

#where Output == 2 change to 2 if Insulin < 30 elif change to 3 if insulin > 0
# def myfunc(x,y):
#     if x <= 30 and y == 2:
#         return y
#     elif x > 30 and y == 2:
#         return y + 1
#     else:
#         return y
    
# diabetes['Output'] = diabetes.apply(lambda x: myfunc(x.Insulin, x.Output), axis=1)




knn = None
X_train, X_test, y_train, y_test = train_test_split(diabetes.loc[:, diabetes.columns != 'Output'], diabetes['Output'], stratify=diabetes['Output'], random_state=66)


# neighbors_settings = range(1, 11)

# for n_neighbors in neighbors_settings:
#     # build the model
#     knn = KNeighborsClassifier(n_neighbors=n_neighbors)
#     knn.fit(X_train, y_train)


knn = KNeighborsClassifier()
knn.fit(X_train, y_train)

app = Flask(__name__)

# class DiabetesForm(Form):
#     age = IntegerField('Age')
#     bmi = FloatField('BMI')
#     bp = IntegerField('Diastolic blood pressure (mm Hg)')
#     glucose = IntegerField('Glucose (plasma glucose concentration over 2 hours)')
#     insulin = IntegerField('2 hour serum insulin (mu U/mL)')
#     skin = IntegerField('Skin thickness (triceps skin fold thickness in mm)')
#     pregnancies = IntegerField('Number of pregnancies')
#     accept_tos = BooleanField('I will not substitute this for a doctor\'s assessment', [validators.DataRequired()])



app=Flask(__name__,template_folder='template')
app.config['ENV'] = 'development'
app.config['DEBUG'] = True


# Change this to your secret key (can be anything, it's for extra protection)
app.secret_key = 'Donsalvatore007'

# Enter your database connection details below
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'seun'
app.config['MYSQL_PASSWORD'] = '1234'
app.config['MYSQL_DB'] = 'glucods'

# Intialize MySQL
mysql = MySQL(app)

###################################################################################################################################
###################################################################################################################################
#####HOME PAGE##################
@app.route('/', methods=['GET', 'POST'])
def index():
    return render_template('index.php')


###################################################################################################################################
###################################################################################################################################
##### DOCTOR LOGIN PAGE ##################
@app.route('/login', methods=['GET', 'POST'])
def login():
	# Output message if something goes wrong...
    msg = ''
    # Check if "username" and "password" POST requests exist (user submitted form)
    if request.method == 'POST' and 'username' in request.form and 'password' in request.form:
        # Create variables for easy access
        username = request.form['username']
        password = request.form['password']

        # Check if account exists using MySQL
        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        cursor.execute('SELECT * FROM Physician WHERE FirstName = %s AND Password = %s', (username, password))
        # Fetch one record and return result
        account = cursor.fetchone()

         # If account exists in accounts table in out database
        if account:

            # Create session data, we can access this data in other routes
            #session['loggedin'] = True
            #session['id'] = account['id']
            #session['username'] = account['username']
            # Redirect to home page
           # return 'Logged in successfully!'
            return render_template('dashboard2.php')
        else:
            # Account doesnt exist or username/password incorrect
            msg = 'Incorrect username/password!'
    return render_template('login6.html', msg=msg)



###################################################################################################################################
###################################################################################################################################
##### DOCTOR REGISTRATION PAGE ##################
@app.route('/register', methods=['GET', 'POST'])
def register():
	# Output message if something goes wrong...
    msg = ''
    # Check if "username", "password" and "email" POST requests exist (user submitted form)
    if request.method == 'POST' and 'firstname' in request.form and 'lastname' in request.form and 'password' in request.form and 'number' in request.form and 'email' in request.form:
        # Create variables for easy access
        firstname = request.form['firstname']
        lastname = request.form['lastname']
        password = request.form['password']
        number = request.form['number']
        email = request.form['email']

        # Check if account exists using MySQL
        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        cursor.execute('SELECT * FROM Physician WHERE Firstname = %s', [firstname])
        account = cursor.fetchone()
        # If account exists show error and validation checks
        if account:
            msg = 'Account already exists!'
        elif not re.match(r'[^@]+@[^@]+\.[^@]+', email):
            msg = 'Invalid email address!'
        elif not re.match(r'[A-Za-z]+', firstname):
            msg = 'Firstname must contain only characters!'
        
        elif not re.match(r'[A-Za-z]+', lastname):
            msg = 'Lastname must contain only characters!'
        elif not firstname or not lastname or not password or not number or not email:
            msg = 'Please fill out the form!'
        else:
            # Account doesnt exists and the form data is valid, now insert new account into accounts table
            cursor.execute('INSERT INTO Physician VALUES (NULL, %s, %s, %s, %s, %s)', (firstname, lastname, password, number, email))
            mysql.connection.commit()
            msg = 'Registration Successful! Login!'
    elif request.method == 'POST':
        # Form is empty... (no POST data)
        msg = 'Please fill out the form!'
    # Show registration form with message (if any)



    return render_template('registration.html', msg=msg)


###################################################################################################################################
###################################################################################################################################
##### LAB SCIENTIST LOGIN PAGE ##################
###########################################

@app.route('/login7', methods=['GET', 'POST'])
def login7():
	# Output message if something goes wrong...
    msg = ''
    # Check if "username" and "password" POST requests exist (user submitted form)
    if request.method == 'POST' and 'username' in request.form and 'password' in request.form:
        # Create variables for easy access
        username = request.form['username']
        password = request.form['password']

        # Check if account exists using MySQL
        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        cursor.execute('SELECT * FROM labscientist WHERE FirstName = %s AND Password = %s', (username, password))
        # Fetch one record and return result
        account = cursor.fetchone()

         # If account exists in accounts table in out database
        if account:
            # Create session data, we can access this data in other routes
            #session['loggedin'] = True
            #session['id'] = account['id']
            #session['username'] = account['username']
            # Redirect to home page
           # return 'Logged in successfully!'
            return render_template('dashboard.php')
        else:
            # Account doesnt exist or username/password incorrect
            msg = 'Incorrect username/password!'
    return render_template('login7.html', msg=msg)


###################################################################################################################################
###################################################################################################################################
##### LAB SCIENTIST REGISTRATION PAGE ##################
###########################################


@app.route('/register2', methods=['GET', 'POST'])
def register2():
	# Output message if something goes wrong...
    msg = ''
    # Check if "username", "password" and "email" POST requests exist (user submitted form)
    if request.method == 'POST' and 'firstname' in request.form and 'lastname' in request.form and 'password' in request.form and 'number' in request.form and 'email' in request.form:
        # Create variables for easy access
        firstname = request.form['firstname']
        lastname = request.form['lastname']
        password = request.form['password']
        number = request.form['number']
        email = request.form['email']

        # Check if account exists using MySQL
        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        cursor.execute('SELECT * FROM labscientist WHERE Firstname = %s', [firstname])
        account = cursor.fetchone()
        # If account exists show error and validation checks
        if account:
            msg = 'Account already exists!'
        elif not re.match(r'[^@]+@[^@]+\.[^@]+', email):
            msg = 'Invalid email address!'
        elif not re.match(r'[A-Za-z]+', firstname):
            msg = 'Firstname must contain only characters!'
        
        elif not re.match(r'[A-Za-z]+', lastname):
            msg = 'Lastname must contain only characters!'
        elif not firstname or not lastname or not password or not number or not email:
            msg = 'Please fill out the form!'
        else:
            # Account doesnt exists and the form data is valid, now insert new account into accounts table
            cursor.execute('INSERT INTO labscientist VALUES (NULL, %s, %s, %s, %s, %s)', (firstname, lastname, password, number, email))
            mysql.connection.commit()
            msg = 'Registration Successful! Login!'
    elif request.method == 'POST':
        # Form is empty... (no POST data)
        msg = 'Please fill out the form!'
    # Show registration form with message (if any)



    return render_template('registration2.html', msg=msg)










@app.route('/login6', methods=['GET', 'POST'])
def login6():

	 # Output message if something goes wrong...
    msg = ''
    # Check if "username" and "password" POST requests exist (user submitted form)
    if request.method == 'POST' and 'username' in request.form and 'password' in request.form:
        # Create variables for easy access
        username = request.form['username']
        password = request.form['password']
        # Check if account exists using MySQL

        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        cursor.execute('SELECT * FROM Physician WHERE FirstName = %s AND Password = %s', (username, password))
        # Fetch one record and return result
        account = cursor.fetchone()
        # If account exists in accounts table in out database
        if account:
            # Create session data, we can access this data in other routes
            session['loggedin'] = True
            session['id'] = account['id']
            session['username'] = account['username']
            # Redirect to home page
            return render_template('dashboard.php')
            #return 'Logged in successfully!'
        else:
            # Account doesnt exist or username/password incorrect
            msg = 'Incorrect username/password!'
    # Show the login form with message (if any)
    return render_template('login6.html') 





###################################################################################################################################
###################################################################################################################################
##### LAB SCIENTIST DASHBOARD PAGE ##################
###########################################

@app.route("/dashboard")
def dashboard():
    return render_template('dashboard.php') 



###################################################################################################################################
###################################################################################################################################
##### DOCTOR DASHBOARD PAGE ##################
###########################################

@app.route("/dashboard2")
def dashboard2():
    return render_template('dashboard2.php') 

#############################
##DYNAMIC SELECT FORM#########

#class form(FlaskForm):

###################################################################################################################################
###################################################################################################################################
##### PATIENT DATA PAGE ##################
###########################################

@app.route('/patientData', methods=['GET', 'POST'])
def patientData():
				cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
				cursor.execute('SELECT Physician_ID, FirstName FROM Physician as Name')
				mysql.connection.commit()
				account = cursor.fetchall()
				msg = ''
    # Check if "username" and "password" POST requests exist (user submitted form)
				if request.method == 'POST' and 'doctor' in request.form and 'firstname' in request.form and 'Lastname' in request.form and 'DOB' in request.form and 'Address' in request.form and 'City' in request.form and 'Contact' in request.form and 'EmergencyContact' in request.form:
        # Create variables for easy access
					doctor = request.form['doctor']
					firstname = request.form['firstname']
					Lastname = request.form['Lastname']
					DOB = request.form['DOB']
					Address = request.form['Address']
					City = request.form['City']
					Contact = request.form['Contact']
					EmergencyContact = request.form['EmergencyContact']
        # Check if account exists using MySQL
					cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
					cursor.execute('SELECT * FROM patientData WHERE PatientFName LIKE %s', [firstname])
					dup = cursor.fetchone()
        # If account exists show error and validation checks
					if dup:
						msg = 'Record already exists!'
					elif not re.match(r'[A-Za-z]+', firstname):
						msg = 'Firstname must contain only characters!'
					elif not re.match(r'[A-Za-z]+', Lastname):
						msg = 'Lastname must contain only characters!'
        
					elif not re.match(r'[0-9]+', Contact):
						msg = 'Enter Digits from 0-9!'
					elif not firstname or not Lastname or not doctor or not DOB or not Address or not City or not Contact or not EmergencyContact:
						msg = 'Please fill out the form!'
					else:
	        # Check if account exists using MySQL
						cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
						cursor.execute('INSERT INTO patientData VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s)', (doctor, firstname, Lastname, DOB, Address, City, Contact, EmergencyContact))
							        # Fetch one record and return result
						mysql.connection.commit()
						msg = 'Recors Added successfully!'

				return render_template('patientData.php', account=account)




###################################################################################################################################
###################################################################################################################################
##### DIAGNOSIS TEST INSERT PAGE ##################
###########################################
@app.route('/diagnosis', methods=['GET', 'POST'])
def diagnosis():
				cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
				cursor.execute('SELECT Lab_ID, FirstName FROM labscientist as Name')
				mysql.connection.commit()
				account= cursor.fetchall()
				cursor.execute('SELECT Physician_ID, FirstName FROM Physician as Name')
				mysql.connection.commit()
				account2= cursor.fetchall()
				cursor.execute('SELECT P_ID, PatientFName FROM patientdata as Name')
				mysql.connection.commit()
				account3= cursor.fetchall()

				if request.method == 'POST' and 'LabScientist' in request.form and 'Physician' in request.form and 'Patient' in request.form and 'age' in request.form and 'bmi' in request.form and 'fastingglucose' in request.form and '2HoursGlucose' in request.form and 'RandomGlucose' in request.form and 'Insulinfasting' in request.form and 'Insulin2Hours' in request.form and 'InsulinRandom' in request.form and 'BloodPressure' in request.form:
					LabScientist = request.form['LabScientist']
					Physician = request.form['Physician']
					Patient = request.form['Patient']
					age = request.form['age']
					bmi = request.form['bmi']
					fastingglucose = request.form['fastingglucose']
					TwoHoursGlucose = request.form['2HoursGlucose']
					RandomGlucose = request.form['RandomGlucose']
					Insulinfasting = request.form['Insulinfasting']
					Insulin2Hours = request.form['Insulin2Hours']
					InsulinRandom = request.form['InsulinRandom']
					BloodPressure = request.form['BloodPressure']
					# PedFunction = request.form['PedFunction']
					if not LabScientist or not Physician or not Patient or not age or not bmi or not fastingglucose or not TwoHoursGlucose or not RandomGlucose or not Insulinfasting or not Insulin2Hours or not InsulinRandom or not BloodPressure:
						msg = 'Please fill out the form!'
					else:
							#INSERT THE DATA
						cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
						cursor.execute('INSERT INTO test VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)', (LabScientist, Physician, Patient, age, bmi, fastingglucose, TwoHoursGlucose, RandomGlucose, Insulinfasting, Insulin2Hours, InsulinRandom, BloodPressure))
						mysql.connection.commit()
				return render_template('diagnosis.php', account=account, account2=account2, account3=account3) 



###############################################################################
############PATIENT INSERT TO DATABASE ACTION##################################
@app.route('/patientinsert', methods=['GET', 'POST'])
def patientinsert():

	# Output message if something goes wrong...
    msg = ''
    # Check if "username" and "password" POST requests exist (user submitted form)
    if request.method == 'POST' and 'doctor' in request.form and 'firstname' in request.form and 'Lastname' in request.form and 'DOB' in request.form and 'Address' in request.form and 'City' in request.form and 'Contact' in request.form and 'EmergencyContact' in request.form:
        # Create variables for easy access
        doctor = request.form['doctor']
        firstname = request.form['firstname']
        Lastname = request.form['Lastname']
        DOB = request.form['DOB']
        Address = request.form['Address']
        City = request.form['City']
        Contact = request.form['Contact']
        EmergencyContact = request.form['EmergencyContact']
        # Check if account exists using MySQL
        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
        cursor.execute('SELECT * FROM patientData WHERE PatientFName LIKE %s', [firstname])
        account = cursor.fetchone()
        # If account exists show error and validation checks
        if account:
            msg = 'Record already exists!'
        elif not re.match(r'[A-Za-z]+', firstname):
            msg = 'Firstname must contain only characters!'
        elif not re.match(r'[A-Za-z]+', Lastname):
            msg = 'Lastname must contain only characters!'
        
        elif not re.match(r'[0-9]+', Contact):
            msg = 'Enter Digits from 0-9!'
        elif not firstname or not Lastname or not doctor or not DOB or not Address or not City or not Contact or not EmergencyContact:
            msg = 'Please fill out the form!'
        else:
	        # Check if account exists using MySQL
	        cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	        cursor.execute('INSERT INTO patientData VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s)', (doctor, firstname, Lastname, DOB, Address, City, Contact, EmergencyContact))
	        # Fetch one record and return result
	        mysql.connection.commit()
	        msg = 'Recors Added successfully!'
        



    return render_template('patientData.php', msg=msg)
      




###################################################################################################################################
###################################################################################################################################
##### VIEW ALL RECORDS PAGE ##################
###########################################

@app.route('/viewrecords', methods=['GET', 'POST'])
def viewrecords():

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT * FROM patientData')
	mysql.connection.commit()
	data=cursor.fetchall()
	cursor.close()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT * FROM test')
	mysql.connection.commit()
	test=cursor.fetchall()
	cursor.close()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT Physician_ID, FirstName FROM Physician as Name')
	mysql.connection.commit()
	account = cursor.fetchall()
	msg = ''
	if request.method == 'POST' and 'doctor' in request.form and 'FirstName' in request.form and 'LastName' in request.form and 'DOB' in request.form and 'Address' in request.form and 'State' in request.form and 'Contact' in request.form and 'EmergencyContact' in request.form:
		flash("Data inserted successfully")
		doctor = request.form['doctor']
		FirstName = request.form['FirstName']
		LastName = request.form['LastName']
		Address = request.form['Address']
		DOB = request.form['DOB']
		State = request.form['State']
		Contact = request.form['Contact']
		EmergencyContact = request.form['EmergencyContact']

		cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
		cursor.execute('SELECT * FROM patientData WHERE PatientFName LIKE %s', [FirstName])
		dup = cursor.fetchone()
		if dup:
			msg = 'Record already exists!'
		elif not re.match(r'[A-Za-z]+', FirstName):
			msg = 'Firstname must contain only characters!'
		elif not re.match(r'[A-Za-z]+', LastName):
			msg = 'Lastname must contain only characters!'
		elif not re.match(r'[0-9]+', Contact):
			msg = 'Enter Digits from 0-9!'
		elif not FirstName or not LastName or not doctor or not DOB or not Address or not State or not Contact or not EmergencyContact:
			msg = 'Please fill out the form!'
		else:
			cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
			cursor.execute('INSERT INTO patientData (Doctor_ID, PatientFName, PatientLName, DOB, Address, State, Contact, EmergencyContact) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)', (doctor, FirstName, LastName, DOB, Address, State, Contact, EmergencyContact))
			mysql.connection.commit()
	return render_template('viewrecords.php', data=data, test=test, account=account, msg=msg)


#######################################################################################################################################################
#######################################################################################################################################################
#########VIEW TESTS FUNCTION###########################################################################################################################
@app.route('/viewtests', methods=['GET', 'POST'])
def viewtests():

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT * FROM test')
	mysql.connection.commit()
	data=cursor.fetchall()
	cursor.close()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT Lab_ID, FirstName FROM labscientist as Name')
	mysql.connection.commit()
	account= cursor.fetchall()
	cursor.execute('SELECT Physician_ID, FirstName FROM Physician as Name')
	mysql.connection.commit()
	account2= cursor.fetchall()
	cursor.execute('SELECT P_ID, PatientFName FROM patientdata as Name')
	mysql.connection.commit()
	account3= cursor.fetchall()
	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	msg = ''
	if request.method == 'POST' and 'LabScientist' in request.form and 'Physician' in request.form and 'Patient' in request.form and 'Age' in request.form and 'bmi' in request.form and 'fastingglucose' in request.form and 'TwoHoursGlucose' in request.form and 'RandomGlucose' in request.form and 'Insulinfasting' in request.form and 'Insulin2Hours' in request.form and 'InsulinRandom' in request.form and 'BloodPressure' in request.form and 'PedFunction' in request.form:
		LabScientist = request.form['LabScientist']
		Physician = request.form['Physician']
		Patient = request.form['Patient']
		Age = request.form['Age']
		bmi = request.form['bmi']
		fastingglucose = request.form['fastingglucose']
		TwoHoursGlucose = request.form['TwoHoursGlucose']
		RandomGlucose = request.form['RandomGlucose']
		Insulinfasting = request.form['Insulinfasting']
		Insulin2Hours = request.form['Insulin2Hours']
		InsulinRandom = request.form['InsulinRandom']
		BloodPressure = request.form['BloodPressure']
		PedFunction = request.form['PedFunction']
		if not LabScientist or not Physician or not Patient or not Age or not bmi or not fastingglucose or not TwoHoursGlucose or not RandomGlucose or not Insulinfasting or not Insulin2Hours or not InsulinRandom or not BloodPressure or not PedFunction:
			msg = 'Please fill out the form!'
		else:
			cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
			cursor.execute('INSERT INTO test VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)', (LabScientist, Physician, Patient, Age, bmi, fastingglucose, TwoHoursGlucose, RandomGlucose, Insulinfasting, Insulin2Hours, InsulinRandom, BloodPressure, PedFunction))
			mysql.connection.commit()	
	return render_template('viewtests.php', data=data, account=account, account2=account2, account3=account3, msg=msg)

    
#######################################################################################################################################################
#######################################################################################################################################################
#########VIEW TESTS FUNCTION###########################################################################################################################
@app.route('/viewtests2', methods=['GET', 'POST'])
def viewtests2():

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT * FROM test')
	mysql.connection.commit()
	data=cursor.fetchall()
	cursor.close()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT Lab_ID, FirstName FROM labscientist as Name')
	mysql.connection.commit()
	account= cursor.fetchall()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT Test_ID FROM test as Name')
	mysql.connection.commit()
	account4= cursor.fetchall()

	cursor.execute('SELECT Physician_ID, FirstName FROM Physician as Name')
	mysql.connection.commit()
	account2= cursor.fetchall()
	cursor.execute('SELECT P_ID, PatientFName FROM patientdata as Name')
	mysql.connection.commit()
	account3= cursor.fetchall()
	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	msg = ''
	if request.method == 'POST' and 'LabScientist' in request.form and 'Physician' in request.form and 'Patient' in request.form and 'Age' in request.form and 'bmi' in request.form and 'fastingglucose' in request.form and 'TwoHoursGlucose' in request.form and 'RandomGlucose' in request.form and 'Insulinfasting' in request.form and 'Insulin2Hours' in request.form and 'InsulinRandom' in request.form and 'BloodPressure' in request.form and 'PedFunction' in request.form:
		LabScientist = request.form['LabScientist']
		Physician = request.form['Physician']
		Patient = request.form['Patient']
		Age = request.form['Age']
		bmi = request.form['bmi']
		fastingglucose = request.form['fastingglucose']
		TwoHoursGlucose = request.form['TwoHoursGlucose']
		RandomGlucose = request.form['RandomGlucose']
		Insulinfasting = request.form['Insulinfasting']
		Insulin2Hours = request.form['Insulin2Hours']
		InsulinRandom = request.form['InsulinRandom']
		BloodPressure = request.form['BloodPressure']
		PedFunction = request.form['PedFunction']
		if not LabScientist or not Physician or not Patient or not Age or not bmi or not fastingglucose or not TwoHoursGlucose or not RandomGlucose or not Insulinfasting or not Insulin2Hours or not InsulinRandom or not BloodPressure or not PedFunction:
			msg = 'Please fill out the form!'
		else:
			cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
			cursor.execute('INSERT INTO test VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)', (LabScientist, Physician, Patient, Age, bmi, fastingglucose, TwoHoursGlucose, RandomGlucose, Insulinfasting, Insulin2Hours, InsulinRandom, BloodPressure, PedFunction))
			mysql.connection.commit()	
	return render_template('viewtests2.php', data=data, account=account, account2=account2, account3=account3, msg=msg)

    






@app.route('/update', methods = ['POST', 'GET'])
def update():
	if request.method == 'POST' and 'doctor' in request.form and 'FirstName' in request.form and 'LastName' in request.form and 'DOB' in request.form and 'Address' in request.form and 'State' in request.form and 'Contact' in request.form and 'EmergencyContact' in request.form:
		doctor= request.form['doctor']
		id_data = request.form['id']
		FirstName= request.form['FirstName']
		LastName= request.form['LastName']
		Address= request.form['Address']
		DOB= request.form['DOB']
		State= request.form['State']
		Contact= request.form['Contact']
		EmergencyContact= request.form['EmergencyContact']

		cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
		query = "UPDATE patientData SET Doctor_ID=%s, PatientFName=%s, PatientLName=%s, Address=%s, State=%s, Contact=%s, EmergencyContact=%s WHERE P_ID = %s'"
		# value = (id_data, doctor, FirstName, LastName, DOB, Address, State, Contact, EmergencyContact)
		value = ((id_data,), (doctor,), (FirstName,), (LastName,), (DOB,), (Address,), (State,), (Contact,), (EmergencyContact,))
		#value = (str(request.PID), str(doctor), str(FirstName), str(LastName), str(DOB), str(Address), str(State), str(Contact), str(EmergencyContact),)
		cursor.execute([query], (value))

		# cursor.execute("""
		# 	UPDATE patientdata
		# 	SET Doctor_ID=%s, PatientFName=%s, PatientLName=%s, Address=%s, State=%s, Contact=%s, EmergencyContact=%s
		# 	WHERE P_ID=%s
		# 	""", [id_data], [doctor], [FirstName], [LastName], [DOB], [Address], [State], [Contact], [EmergencyContact])

		# cursor.execute()

		# query = ("""
		# 	UPDATE patientdata
		#  	SET Doctor_ID=%s, PatientFName=%s, PatientLName=%s, Address=%s, State=%s, Contact=%s, EmergencyContact=%s
		#  	WHERE P_ID=%s
		#  	""")

		# value = ([id_data, doctor, FirstName, LastName, DOB, Address, State, Contact, EmergencyContact])

		# cursor.execute(query, value,)





		# cursor.execute('UPDATE patientData SET Doctor_ID='doctor', PatientFName='FirstName', PatientLName='LastName', Address='Address', State='State', Contact='Contact', EmergencyContact='EmergencyContact' WHERE P_ID LIKE 'PID'')

		flash("Data Updated successfully")
		mysql.connection.commit()
		return redirect({{ url_for('viewrecords.php')}}) 


@app.route('/predict', methods = ['POST', 'GET'])
def predict():
	if request.method == 'POST':
		age = request.form['age']
		bmi = request.form['bmi']
		twohrsglucose = request.form['twohrsglucose']
		twohrsinsulin = request.form['twohrsinsulin']
		insulinrandom = request.form['insulinrandom']
		bloodpressure = request.form['bloodpressure']
		fastingglucose = request.form['fastingglucose']
		insulinfasting = request.form['insulinfasting']
		res1 = knn.predict(
			[[
			# float(request.form['age']),
			# float(request.form['bmi']),
			# float(request.form['twohrsglucose']),
			# float(request.form['twohrsinsulin']),
			# float(request.form['insulinrandomn']),
			# float(request.form['bloodpressure'])

			# float(age),
			# float(bmi),
			# float(twohrsglucose),
			float(fastingglucose),
			float(twohrsinsulin)
			# float(insulinrandom),
			# float(bloodpressure),
			
			# float(insulinfasting)

			]]

			)

		res2 = knn.predict_proba(
			[[
			# float(request.form['age']),
			# float(request.form['bmi']),
			# float(request.form['twohrsglucose']),
			# float(request.form['twohrsinsulin']),
			# float(request.form['insulinrandomn']),
			# float(request.form['bloodpressure'])

			# float(age),
			# float(bmi),
			# float(twohrsglucose),
			float(fastingglucose),
			float(twohrsinsulin)
			# float(insulinrandom),
			# float(bloodpressure),
			
			# float(insulinfasting)

			]]

			)[:]

		msg=''
		if res1 == 0:
			msg = 'Normal'
		elif res1 == 1:
			msg = 'Prediabetic'
		else:
			msg = 'Diabetic'

		# for i in res2.tolist():
		# 	print(i)

	return render_template('results.php', res=msg, resx=int(((res2[:,2])) * 100))

	return render_template('viewtests2.php')

    
 
@app.route('/patients', methods=['GET', 'POST'])
def patients():
    return render_template('Patients.html')


@app.route('/classification', methods=['GET', 'POST'])
def classification():
	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT * FROM test')
	mysql.connection.commit()
	data=cursor.fetchall()
	cursor.close()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT Lab_ID, FirstName FROM labscientist as Name')
	mysql.connection.commit()
	account= cursor.fetchall()

	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	cursor.execute('SELECT Test_ID FROM test as Name')
	mysql.connection.commit()
	account4= cursor.fetchall()

	cursor.execute('SELECT Physician_ID, FirstName FROM Physician as Name')
	mysql.connection.commit()
	account2= cursor.fetchall()
	cursor.execute('SELECT P_ID, PatientFName FROM patientdata as Name')
	mysql.connection.commit()
	account3= cursor.fetchall()
	cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
	msg = ''
	if request.method == 'POST' and 'LabScientist' in request.form and 'Physician' in request.form and 'Patient' in request.form and 'Age' in request.form and 'bmi' in request.form and 'fastingglucose' in request.form and 'TwoHoursGlucose' in request.form and 'RandomGlucose' in request.form and 'Insulinfasting' in request.form and 'Insulin2Hours' in request.form and 'InsulinRandom' in request.form and 'BloodPressure' in request.form and 'PedFunction' in request.form:
		LabScientist = request.form['LabScientist']
		Physician = request.form['Physician']
		Patient = request.form['Patient']
		Age = request.form['Age']
		bmi = request.form['bmi']
		fastingglucose = request.form['fastingglucose']
		TwoHoursGlucose = request.form['TwoHoursGlucose']
		RandomGlucose = request.form['RandomGlucose']
		Insulinfasting = request.form['Insulinfasting']
		Insulin2Hours = request.form['Insulin2Hours']
		InsulinRandom = request.form['InsulinRandom']
		BloodPressure = request.form['BloodPressure']
		PedFunction = request.form['PedFunction']
		if not LabScientist or not Physician or not Patient or not Age or not bmi or not fastingglucose or not TwoHoursGlucose or not RandomGlucose or not Insulinfasting or not Insulin2Hours or not InsulinRandom or not BloodPressure or not PedFunction:
			msg = 'Please fill out the form!'
		else:
			cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
			cursor.execute('INSERT INTO test VALUES (NULL, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)', (LabScientist, Physician, Patient, Age, bmi, fastingglucose, TwoHoursGlucose, RandomGlucose, Insulinfasting, Insulin2Hours, InsulinRandom, BloodPressure, PedFunction))
			mysql.connection.commit()
	return render_template('classification.php', data=data, account=account, account2=account2, account3=account3, msg=msg)






#########################################################################################################################
@app.route('/classify', methods=['GET', 'POST'])
def classify():
	if request.method == 'POST':
		age = request.form['age']
		bmi = request.form['bmi']
		twohrsglucose = request.form['twohrsglucose']
		twohrsinsulin = request.form['twohrsinsulin']
		insulinrandom = request.form['insulinrandom']
		bloodpressure = request.form['bloodpressure']
		fastingglucose = request.form['fastingglucose']
		insulinfasting = request.form['insulinfasting']
		res1 = knn.predict(
			[[
			# float(request.form['age']),
			# float(request.form['bmi']),
			# float(request.form['twohrsglucose']),
			# float(request.form['twohrsinsulin']),
			# float(request.form['insulinrandomn']),
			# float(request.form['bloodpressure'])

			# float(age),
			# float(bmi),
			# float(twohrsglucose),
			float(fastingglucose),
			float(twohrsinsulin)
			# float(insulinrandom),
			# float(bloodpressure),
			
			# float(insulinfasting)

			]]

			)

		res2 = knn.predict_proba(
			[[
			# float(request.form['age']),
			# float(request.form['bmi']),
			# float(request.form['twohrsglucose']),
			# float(request.form['twohrsinsulin']),
			# float(request.form['insulinrandomn']),
			# float(request.form['bloodpressure'])

			# float(age),
			# float(bmi),
			# float(twohrsglucose),
			float(fastingglucose),
			float(twohrsinsulin)
			# float(insulinrandom),
			# float(bloodpressure),
			
			# float(insulinfasting)

			]]

			)
		msg = ''
		if res1 == 2:
			msg = 'Type1 Diabetes'
		elif res1 == 3:
			msg = 'Type2 Diabetes'
				

		for i in res2.tolist():
			print(i)

	return render_template('results.php', res=msg, resx=int(res2[0][1] * 100))
	return render_template('classification.php')
			
			 


# @app.route('/delete/<string:id_data>', methods=['GET', 'POST'])
# def delete(id_data):
# 		if request.method == 'POST' and 'doctor' in request.form and 'FirstName' in request.form and 'LastName' in request.form and 'DOB' in request.form and 'Address' in request.form and 'State' in request.form and 'Contact' in request.form and 'EmergencyContact' in request.form:
# 			id_data = request.form['id']
# 			cur=mysql.connection.cursor()
# 			cur.execute("DELETE FROM patientdata WHERE id=%s", (id_data))
# 			mysql.connection.commit()
# 		return render_template('viewrecords.php')


# @app.route('/delete', methods=['GET', 'POST'])
# def delete():
# 		if request.method == 'POST':
# 			id_data = request.form['patient_id']
# 			cur=mysql.connection.cursor()
# 			cur.execute("DELETE FROM patientdata WHERE id=%s", (id_data))
# 			mysql.connection.commit()
# 		return render_template('index.php')
	


@app.route('/delete', methods=['GET', 'POST'])
def delete():
	id_data = request.form['patient_id']
	cur=mysql.connection.cursor()
	cur.execute("DELETE FROM patientdata WHERE id=%s", (id_data))
	mysql.connection.commit()
	return redirect('viewtests.php')
			
			
			
			
		
	    


if __name__=="__main__":
    app.run(debug=True)
