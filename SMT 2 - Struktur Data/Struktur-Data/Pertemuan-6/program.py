import collections

print('========================')
print('Nama  : Febro Herdyanto')
print('NIM   : 312010043')
print('Kelas : TI.20.B.1')
print('========================')
queue_list = collections.deque([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
print('Data Antrian yang tersedia : ', queue_list)
print()
# menambahakan data antrian
queue_baru = 11
queue_list.append(queue_baru)
print('Antrian Baru Nomor : ', queue_baru)
print('Total Antrian saat ini : ', len(queue_list))
print('Data Antrian saat ini : ', queue_list)
print()

# mengurangi antrian
keluar = queue_list.popleft()
print('Antrian yang akan keluar Nomor : ', keluar)
print('Data Antrian saat ini : ', queue_list)


def maksimal():
    print("Nilai terbesar dalam Antrian adalah : ", end="")
    print(max(queue_list))


def minimal():
    print("Nilai terkecil dalam Antrian saat ini adalah : ", end="")
    print(min(queue_list))


def ratarata():
    print("Nilai Rata Rata dalam Antrian saat ini adalah : ", end="")
    print(sum(queue_list)/len(queue_list))


def total():
    print("Nilai Total dalam Antrian saat ini adalah : ", end="")
    print(sum(queue_list))


print()
minimal()
maksimal()
total()
ratarata()
