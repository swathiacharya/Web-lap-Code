import re
states = "Mississippi Alabama Texas Massachusetts Kansas"
statesArray = states.split()
statesList = list()
for val in statesArray:
	if re.search('xas$',val):
		statesList.append(val)
for val in statesArray:
	if re.search('^k.*s$',val, re.I):
		statesList.append(val)
for val in statesArray:
	if re.search('^M.*s$',val):
		statesList.append(val)
for val in statesArray:
	if re.search('a$',val):
		statesList.append(val)
for val in statesList:
	print(val)
print(states);

