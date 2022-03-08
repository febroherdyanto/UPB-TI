print('========================')
print('Nama  : Febro Herdyanto')
print('NIM   : 312010043')
print('Kelas : TI.20.B.1')
print('========================')

def quickSort(alist):
  quickSortHelper(alist,0,len(alist)-1)
def quickSortHelper(alist,start,end):
  if start >= end:
    return
  i,j = start, end
  pivot = (start + (end - start)//2)
  while i<=j:
    while(alist[i] < alist[pivot]):
      i+=1
    while(alist[j] > alist[pivot]):
      j-=1
    if(i<=j):
      alist[i],alist[j] = alist[j],alist[i]
      i+=1
      j-=1
  quickSortHelper(alist,start,j)
  quickSortHelper(alist,i,end)
  return alist

alist = [54,26,93,17,77,31,44,55,20]

print('Data sebelum Sort : ')
print(alist)
print()
print('Data yang sudah di Sort : ')
quickSort(alist)

print(alist) 