print('========================')
print('Nama  : Febro Herdyanto')
print('NIM   : 312010043')
print('Kelas : TI.20.B.1')
print('========================')

def is_prima (x):
  for i in range(2, x):
    if x % i == 0:
      return False

  return True

def cari_bilangan_prima (awal, akhir):
  list_bilangan_prima = []

  for x in range(awal, akhir + 1):
    if is_prima(x):
      list_bilangan_prima.append(x)

  return list_bilangan_prima

print('Bilangan Prima dari 1 sampai 100')
print(cari_bilangan_prima(1, 100))
print('Bilangan Prima dari 100 sampai 200')
print(cari_bilangan_prima(100, 200))