// table structure

material

org_name  - text
org_email - text
org_phone - text
org_fax
org_location - text 
mission - long_text
slogan - text
abstract - text
logo
services
operationHours
resources
imageBank
contact
status


CREATE TABLE repo_organization(
	organization_id INTEGER,
	org_name TEXT,
	org_email TEXT,
	org_phone TEXT,
	org_fax TEXT, 
	org_location TEXT,
	mission TEXT,
	slogan TEXT,
	abstract TEXT, 
	service TEXT,
	operationHours TEXT, 
	resources TEXT, 
	contact TEXT, 
	status BOOLEAN,
	created_at timestamp,
	updated_at timestamp
)



CREATE TABLE repo_user(
	name TEXT,
	email TEXT,
	phoneNumber TEXT,
	secondayPhone TEXT,
	type TEXT,
	status BOOLEAN,
	password TEXT, 
	created_at timestamp,
	organization_id INTEGER
);







name
email
phone number
secondary_phone
organization 
user type
status
password
timestamp

















