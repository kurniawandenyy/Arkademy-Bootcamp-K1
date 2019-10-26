def profit(saham):
	maxim = 0
	minim = 99
	for x in saham:
		if x>maxim:
			maxim=x
	indexmax = saham.index(maxim)
	for i in range(indexmax):
		if saham[i]<minim:
			minim=saham[i]
	hasil=maxim-minim
	if hasil<=0:
		print("Tidak bisa mendapatkan profit pada hari ini")
	else:
		print("Highest Profit :",hasil)
harga = [10,2,11,20,3,5]
profit(harga)