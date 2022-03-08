print("Nama : Febro Herdyanto")
print("NIM : 312010043")
print("Kelas : TI>20.B.1")
print("===========================")
print("Latihan - Modul Praktikum 4")
print()

print("Membuat List dengan 5 elemen")
daftar = [1, 2, 3, 4, 5]
print(daftar)
# Akses List
print("Menampilkan elemen ke 3")
print(daftar[2])

print("Ambil nilai elemen ke 2 sampai ke 4")
print(daftar[1:4])

print("Ambil nilai terakhir")
print(daftar[-1])

# Ubah element list
print("ubah elemen ke 4 dengan nilai lainnya")
daftar[3] = 8
print(daftar[3])

print("ubah elemen ke 4 sampai dengan elemen terakhir")
daftar[3:5] = [16, 20]
print(daftar)

# Tambah Element List
print("ambil 2 bagian dari list pertama(A) dan jadikan list ke2(B)")
baris = daftar[3:5]
print(baris)

print("tambah list B dengan nilai string")
baris.append('Febro')
print(baris)

print("Tambah list B dengan 3 nilai")
baris.extend(["Herdyanto", 3, 2])
print(baris)

print("Menggabungkan list A dnegan List B")
gabung = daftar + baris
print(gabung)
