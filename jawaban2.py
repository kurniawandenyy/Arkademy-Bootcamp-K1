import re

def validating_name(name):
	regex_name = re.compile(r'^[A-Z]{3,}$')
	
	res = regex_name.search(name)

	if res:
		print("Valid Name")
	else:
		print("Invalid Name")

def validating_age(age):
	regex_age = re.compile(r'^\d{2}$')
	res = regex_age.search(age)
	if res:
		print("Valid Age")
	else:
		print("Invalid Age")

def validating_username(username):
	regex_username = re.compile(r'^[a-z]{4}[_|.][0-9]{3}$')
	res = regex_username.search(username)
	if res:
		print("Valid Username")
	else:
		print("Invalid Username")
validating_name("DEN")
validating_name("Den")
validating_age("21")
validating_age("2")
validating_username("deny_123")
validating_username("Deny.123")
