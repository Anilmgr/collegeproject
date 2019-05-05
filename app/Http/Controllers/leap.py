
def is_leapyear(year):
	leap = False

	if year % 4 == 0:
		if year % 400 == 0:
			leap = True
		
	return leap

year = int(input())
print(is_leapyear(year))
