def bubblesort(val):
	for x in range(len(val)-1,0,-1):
		for i in range(x):
			if val[i]>val[i+1]:
				temp = val[i]
				val[i] = val[i+1]
				val[i+1] = temp

Angka = [1,3,2,0,5,2]
bubblesort(Angka)
print(Angka)