#include <conio.h>
#include <stdio.h>

int jumlah;
char datajumlah;

struct penduduk{
	char no_ktp[20];
	char nama[100];
	char tempat_lahir[20];
	char tgl_lahir[2];
	char bln_lahir[10];
	char thn_lahir[4];
	char jalan[20];
	char no_jalan[5];
	char rt[5];
	char rw[5];
	char kelurahan[20];
	char kecamatan[20];
	char kabkot[20];
};

int main(){
	printf("=======================\n");
	printf("=   FEBRO HERDYANTO   =\n");
	printf("=      312010043      =\n");
	printf("=      TI.20.B.1      =\n");
	printf("=======================\n");
	
	penduduk user[3];
	for (int i=0; i<3; i++){
		printf("\nInput Data ke-%d",i+1);
		printf("\nMasukkan Nomor KTP : "); scanf("%s",&user[i].no_ktp);
		printf("Masukkan Nama : "); scanf("%s",&user[i].nama);
		printf("Masukkan Tempat Lahir : "); scanf("%s",&user[i].tempat_lahir);
		printf("Masukkan Tanggal Lahir : "); scanf("%s",&user[i].tgl_lahir);
		printf("Masukkan Bulan Lahir : "); scanf("%s",&user[i].bln_lahir);
		printf("Masukkan Tahun Lahir : "); scanf("%s",&user[i].thn_lahir);
		printf("Masukkan Alamat :\n Jl. "); scanf("%s",&user[i].jalan);
		printf(" No Rumah. "); scanf("%s",&user[i].no_jalan);
		printf(" RT. "); scanf("%s",&user[i].rt);
		printf(" RW. "); scanf("%s",&user[i].rw);
		printf(" Kelurahan. "); scanf("%s",&user[i].kelurahan);
		printf(" Kecamatan. "); scanf("%s",&user[i].kecamatan);
		printf(" Kabupaten/Kota. "); scanf("%s",&user[i].kabkot);
		
		printf("\n========== DATA PENDUDUK ==========");
		printf("\nHasil Data ke-%d",i+1);
		printf("\nNo. KTP : %s",user[i].no_ktp);
		printf("\nNama Penduduk : %s",user[i].nama);
		printf("\nTempat Tanggal Lahir : %s, %s %s %s",user[i].tempat_lahir,user[i].tgl_lahir,user[i].bln_lahir,user[i].thn_lahir);
		printf("\nAlamat Penduduk : Jl. %s No. %s, RT/RW. %s/%s, Kelurahan. %s, Kecamatan. %s, Kabupaten/Kota. %s",user[i].jalan,user[i].no_jalan,user[i].rt,user[i].rw,user[i].kelurahan,user[i].kecamatan,user[i].kabkot);
		printf("\n===================================");
	}
}

