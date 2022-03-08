print('========================')
print('Nama  : Febro Herdyanto')
print('NIM   : 312010043')
print('Kelas : TI.20.B.1')
print('========================')
bilangan = int(input('Masukkan bilangan: '))
pangkat = int(input('Masukkan pangkat: '))


def hitung_pangkat(bilangan, pangkat):
    if pangkat > 1:
        return bilangan * hitung_pangkat(bilangan, pangkat - 1)

    return bilangan


hasil = hitung_pangkat(bilangan, pangkat)
print(f'Hasil = {hasil}')
