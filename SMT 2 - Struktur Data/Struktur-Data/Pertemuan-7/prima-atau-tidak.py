def is_prima(x):
    for i in range(2, x):
        if x % i == 0:
            return False

    return True


print('========================')
print('Nama  : Febro Herdyanto')
print('NIM   : 312010043')
print('Kelas : TI.20.B.1')
print('========================')
bilangan = int(input('Masukkan Bilangan : '))

if (is_prima(bilangan) == True):
    print('Bilangan Prima')
else:
    print('Bukan Bilangan Prima')
