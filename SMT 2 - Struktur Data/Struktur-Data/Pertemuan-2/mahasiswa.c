#include <stdio.h>
#include <conio.h>

struct Mahasiswa{
	char nim[10];
	char nama[50];
	char alamat[200];
	char no_telp[15];
	char jurusan[25];
};

void main(){	
	struct Mahasiswa mhs;
	
	printf("=======================\n");
	printf("=   FEBRO HERDYANTO   =\n");
	printf("=      312010043      =\n");
	printf("=      TI.20.B.1      =\n");
	printf("=======================\n\n");
	
	printf("===== INPUT DATA MAHASISWA UPB =====\n");
	printf("Masukkan NIM : "); scanf("%s", mhs.nim);
	printf("Masukkan Nama : "); scanf("%s", mhs.nama);
	printf("Masukkan Alamat : "); scanf("%s", mhs.alamat);
	printf("Masukkan Nomor HP : "); scanf("%d", mhs.no_telp);
	printf("Masukkan Jurusan : "); scanf("%s", mhs.jurusan);
	
	display(mhs);
}

void display(struct Mahasiswa data){
	printf("\n===== DATA MAHASISWA UPB =====");
	printf("\nNIM Mahasiswa : %s", data.nim);
	printf("\nNama Mahasiswa : %s", data.nama);
	printf("\nAlamat Mahasiswa : %s", data.alamat);
	printf("\nNomor Telp Mahasiswa : %d", data.no_telp);
	printf("\nJurusan Mahasiswa : %s", data.jurusan);
}
