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

![](RackMultipart20230615-1-6mziyd_html_cc484dce94ead997.png)

Pengujian Halaman Login berfungsi untuk melakukan masuk ke halaman utama dashboard. Tabel penguji Halaman Login dapat dilihat pada Tabel 1.2

Tabel 1.2

| Test Case | Hasil yang diharapkan | Hasil pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Melakukan login dengan username atau password yang salah | Mendapatkan peringatan bahwa username salah | Sesuai Harapan | Diterima |
| Melakukan login dengan username dan password ya | Mendapatkan mengakses halaman admin | Sesuai Harapan | Diterima |

    1. Pengujian Data Karyawan

![](RackMultipart20230615-1-6mziyd_html_1b32e9f2c09aec8f.png)

Pengujian Data Pegawai berfungsi untuk melakukan tambah/update/hapus datapegawai. Tabel pengujian Data pegawai dapat dilihat pada Tabel 1.3.

Tabel 1.3.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Tambah Pegawai | Dapat menambahkan data pegawai dan memunculkan list data pegawai | Sesuai Harpan | Diterima |
| Klik tombol Update Data | Dapat mengupdate data pribadi pegawai dan memperbaharui di halaman list data pegawai | Sesuai Harapan | Diterima |
| Klik Tombol Delete Data | Data pegawai danlist data pegawai akan terhapus | Sesuai Harapan | Diterima
 |

    1. Pengujian Data Jabatan

![](RackMultipart20230615-1-6mziyd_html_5468948445c7a5a9.png)

Pengujian Data Jabatan berfungsi untuk melakukan tambah/update/hapus datajabatan. Tabel pengujian Data Jabatan dapat dilihat pada Tabel 1.4.

Tabel 1.4.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Tambah Jabatan dan gaji | Dapat menambahkan data Jabatan dan gaji dan memunculkan list data jabatan dan gaji | Sesuai Harpan | Diterima |
| Klik tombol Update Data | Dapat mengupdate data jabatan dan gaji, dan memperbaharui di halaman list data jabatan dan gaji | Sesuai Harapan | Diterima |
| Klik Tombol Delete Data | Data jabatan dan gaji, danlist data jabatan dan gaji akan terhapus | Sesuai Harapan | Diterima
 |

    1. Pengujian Data Kehadiran

![](RackMultipart20230615-1-6mziyd_html_c08ee505c311ebd9.png)

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

![](RackMultipart20230615-1-6mziyd_html_8a359bd98012258b.png)

Pengujian Laporan Gaji berfungsi untuk menampilkan hasil seluruh datagaji. Tabel pengujian Laporan Gaji dapat dilihat pada Tabel 1.6.

Tabel 1.6.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Klik tombol Cetak Daftar Gaji | Mampu mencetak laporan gaji dari keseluruan pegawai | Sesuai Harpan | Diterima |
| Klik tombol Tampilkan Data | Dapat melihat Riwayat daftar gaji terdahulu dan dapat mencetaknya | Sesuai Harapan | Diterima |

    1. Pengujian Laporan Absensi

![](RackMultipart20230615-1-6mziyd_html_246e3b213af46cb9.png)

Pengujian Laporan Absensi berfungsi untuk menampilkan hasil seluruh dataabsensi pegawai. Tabel pengujian Laporan Absensi dapat dilihat pada Tabel 1.7.

Tabel 1.7.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Pemilihan tanggal dan Cetak Laporan Absensi | Mampu mencetak laporan absensi dengan melakukan pemilihan tanggal | Sesuai Harpan | Diterima |

    1. Pengujian Laporan Slip Gaji Pegawai

![](RackMultipart20230615-1-6mziyd_html_6112de8e4f825826.png)

Pengujian Laporan Absensi berfungsi untuk menampilkan hasil seluruh dataabsensi pegawai. Tabel pengujian Laporan Absensi dapat dilihat pada Tabel 1.8.

Tabel 1.8.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Memilih tanggal, dan nama pegawai | Mampu mencetak laporan salah satu Gaji pegawai dengan melakukan pemilihan tanggal dan pemilihan daftar pegawai | Sesuai Harpan | Diterima |

    1. Ubah Password

![](RackMultipart20230615-1-6mziyd_html_504c0a11f6701578.png)

Pengujian Laporan Absensi berfungsi untuk menampilkan hasil seluruh dataabsensi pegawai. Tabel pengujian Laporan Absensi dapat dilihat pada Tabel 1.9.

Tabel 1.9.

| Test Case | Hasil Yang diharapkan | Hasil Pengujian | Kesimpulan |
| --- | --- | --- | --- |
| Mengganti Password lama dengan yang baru | Mampu melakukan penggantian password lama dengan password yang baru | Sesuai Harpan | Diterima |