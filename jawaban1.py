import json
class sekolah(object):
	"""docstring for sekolah"""
	def __init__(self, name, year_in, year_out, major):
		self.name=name
		self.year_in=year_in
		self.year_out=year_out
		self.major=major

class skill(object):
	"""docstring for skill"""
	def __init__(self, skill_name, level):
		self.skill_name=skill_name
		self.level=level
		
def biodata(nama,umur):
	add = "Padang, West Sumatera"
	hobbies = ["Travelling", "Reading"]
	is_married = False
	list = []
	skills = []
	coding = True
	list.append(sekolah("Politeknik Negeri Padang",2016,2019,"Teknologi Informasi"))
	list.append(sekolah("SMK Kartika 1-2 Padang",2013,2016,"Teknik Komputer dan Jaringan"))
	skills.append(skill("Python","beginner"))
	
	x = {
	"Name": nama,
	"Age": umur,
	"Address": add,
	"Hobbies": hobbies,
	"Is_married": is_married,
	"Interest in Coding": coding
	}
	print(json.dumps(x))
	for obj in list:
		print(json.dumps([obj.name,obj.year_in,obj.year_out,obj.major]))

	for s in skills:
		print(json.dumps([s.skill_name,s.level]))

biodata("Deny",21)
