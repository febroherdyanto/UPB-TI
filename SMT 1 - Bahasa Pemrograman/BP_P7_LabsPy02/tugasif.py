print("Masukkan Pilihan Angka ke-1 : ")
xangka1 = int(input())
print("Masukkan Pilihan Angka ke-2 : ")
xangka2 = int(input())
print("Masukkan Pilihan Angka ke-3 : ")
xangka3 = int(input())

print("\n")

if (xangka1 > xangka2) and (xangka1 > xangka3):
    print(f"Bilangan Pertama ({xangka1}) lebih besar dari Bilangan kedua dan ketiga")
elif (xangka2 > xangka1) and (xangka2 > xangka3):
    print(f"Bilangan kedua ({xangka2}) lebih besar dari Bilangan pertama dan ketiga")
elif (xangka1 == xangka2) and (xangka1 == xangka3) and (xangka2 == xangka3):
    print("Bilangan yang dimasukkan sama besar")
else:
    print(f"Bilangan ketiga ({xangka3}) lebih besar dari Bilangan pertama dan kedua")

