1. Uji Coba
  1. Lingkungan Pengujian

Pengujian ini dilakukan menggunakan laptop HP Pavilion Gaming 15 dengan spesifikasih :

1. Intel I7 Gen 9

2. Ram 16 GB

3. VGA GTX 1650TI

4. Windows 11 Pro

    1. Skenario Pengujian Alpha

Tabel dari scenario berisikan menu yang akan diujikan berdasarkan kelas uji, butir uji dan jenis pengujian yaitu _blackbox testing_. Tabel skenario dapat dilihat pada table 1.1

Tabel 1.1. Pengujian Alpha

| Kelas Uji | Butir Uji | Pengujian |
| --- | --- | --- |
| Login Halaman | Menampilkan menu login, lalu pengguna harus mengisi username dan kata sandi. | Black Box |
| Dasboard Halaman | Menampilkan informasi singkat tentang data karyawa | Black Box |
| Data Karyawan | Tambah DataUpdate DataHapus Data | Black Box |
| Data Jabatan dan Gaji | Tambah DataUpdate DataHapus Data | Black Box |
| Data Kehadiran | Tambah DataUpdate DataHapus Data | Black Box |
| Laporan Gaji | Tampil DataCetak Data | Black Box |
| Laporan Absensi | Tampil DataCetak Data | Black Box |

    1. Kasus dan Pengujian

Kasus dan pengujian berisikan Test Case, Hasil yang diharapkan, hasil pengujian dan kesimpulan dari semua pengujian yang dilakukan secara blackbox.

    1. Pungujian Login Halaman

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/57414789-1b62-4875-a8c0-90d0ca1af88c)

Pengujian Halaman Login berfungsi untuk melakukan masuk ke halaman utama dashboard. Tabel penguji Halaman Login dapat dilihat pada Tabel 1.2

Tabel 1.2

| Test Case | Hasil yang diharapkan | Hasil pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Melakukan login dengan username atau password yang salah | Mendapatkan peringatan bahwa username salah | Sesuai Harapan | Diterima |
| Melakukan login dengan username dan password ya | Mendapatkan mengakses halaman admin | Sesuai Harapan | Diterima |

    1. Pengujian Data Karyawan

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/6e684eb6-c405-40d5-ac75-92497daf12fe)

Pengujian Data Pegawai berfungsi untuk melakukan tambah/update/hapus datapegawai. Tabel pengujian Data pegawai dapat dilihat pada Tabel 1.3.

Tabel 1.3.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Tambah Pegawai | Dapat menambahkan data pegawai dan memunculkan list data pegawai | Sesuai Harpan | Diterima |
| Klik tombol Update Data | Dapat mengupdate data pribadi pegawai dan memperbaharui di halaman list data pegawai | Sesuai Harapan | Diterima |
| Klik Tombol Delete Data | Data pegawai danlist data pegawai akan terhapus | Sesuai Harapan | Diterima
 |

    1. Pengujian Data Jabatan

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/2c377b59-4a9b-4332-85ea-7ddd7f267b17)

Pengujian Data Jabatan berfungsi untuk melakukan tambah/update/hapus datajabatan. Tabel pengujian Data Jabatan dapat dilihat pada Tabel 1.4.

Tabel 1.4.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Tambah Jabatan dan gaji | Dapat menambahkan data Jabatan dan gaji dan memunculkan list data jabatan dan gaji | Sesuai Harpan | Diterima |
| Klik tombol Update Data | Dapat mengupdate data jabatan dan gaji, dan memperbaharui di halaman list data jabatan dan gaji | Sesuai Harapan | Diterima |
| Klik Tombol Delete Data | Data jabatan dan gaji, danlist data jabatan dan gaji akan terhapus | Sesuai Harapan | Diterima
 |

    1. Pengujian Data Kehadiran

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/27746bd2-adc8-4e40-a9a4-e12d0a2a2d3f)

Pengujian Data Absensi berfungsi untuk melakukan tambah/update/hapus/tampil dataabsensi. Tabel pengujian Data Absensi dapat dilihat pada Tabel 1.5.

Tabel 1.5.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Input Kehadiran | Dapat menambahkan data absensi sesuai dengan tanggal yang bisa diaturkan. | Sesuai Harpan | Diterima |
| Klik tombol Update Data | Dapat mengupdate data absensi, dan memperbaharui di halaman list data absensi. | Sesuai Harapan | Diterima |
| Klik Tombol Delete Data | Data absensi danlist data jabatan akan terhapus | Sesuai Harapan | Diterima
 |
| Klik Tombol Tampilkan Data | Data absensi mampu melakukan list data absensi dengan tanggal yang ditentukkan | Sesuai Harapan | Diterima |

    1. Pengujian Laporan Gaji

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/dfda389a-e661-400b-9424-53e7c0c889e1)

Pengujian Laporan Gaji berfungsi untuk menampilkan hasil seluruh datagaji. Tabel pengujian Laporan Gaji dapat dilihat pada Tabel 1.6.

Tabel 1.6.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Cetak Daftar Gaji | Mampu mencetak laporan gaji dari keseluruan pegawai | Sesuai Harpan | Diterima |
| Klik tombol Tampilkan Data | Dapat melihat Riwayat daftar gaji terdahulu dan dapat mencetaknya | Sesuai Harapan | Diterima |

    1. Pengujian Laporan Absensi

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/ffbd7d63-a75f-4c40-b9ca-6585ba7238bb)

Pengujian Laporan Absensi berfungsi untuk menampilkan hasil seluruh dataabsensi pegawai. Tabel pengujian Laporan Absensi dapat dilihat pada Tabel 1.7.

Tabel 1.7.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Pemilihan tanggal dan Cetak Laporan Absensi | Mampu mencetak laporan absensi dengan melakukan pemilihan tanggal | Sesuai Harpan | Diterima |

    1. Pengujian Laporan Slip Gaji Pegawai

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/c8fff520-a8dd-48e0-8b97-b9bcabc83968)

Pengujian Laporan Absensi berfungsi untuk menampilkan hasil seluruh dataabsensi pegawai. Tabel pengujian Laporan Absensi dapat dilihat pada Tabel 1.8.

Tabel 1.8.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Memilih tanggal, dan nama pegawai | Mampu mencetak laporan salah satu Gaji pegawai dengan melakukan pemilihan tanggal dan pemilihan daftar pegawai | Sesuai Harpan | Diterima |

    1. Ubah Password

![image](https://github.com/cantiir2/payroll-manager-acounting/assets/36468037/a738cb78-66ad-4ef2-a8d3-c49b32e2fe6a)

Pengujian Laporan Absensi berfungsi untuk menampilkan hasil seluruh dataabsensi pegawai. Tabel pengujian Laporan Absensi dapat dilihat pada Tabel 1.9.

Tabel 1.9.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Mengganti Password lama dengan yang baru | Mampu melakukan penggantian password lama dengan password yang baru | Sesuai Harpan | Diterima |
