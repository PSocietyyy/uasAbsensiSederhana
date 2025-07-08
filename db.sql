-- ===============================
-- TABEL SISWA
-- ===============================
CREATE TABLE siswa (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,                          -- ID unik untuk setiap siswa (digunakan sebagai Primary Key)
    nis VARCHAR(255),                               -- Nomor Induk Siswa, bisa unik tergantung kebutuhan
    nama_lengkap VARCHAR(255),                      -- Nama lengkap siswa
    kelas VARCHAR(255),                             -- Nama kelas, contoh: 10 IPA 2
    status ENUM('aktif', 'nonaktif', 'alumni')      -- Status siswa: apakah masih aktif, nonaktif, atau sudah alumni
);

-- ===============================
-- TABEL JADWAL
-- ===============================
CREATE TABLE jadwal (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,                          -- ID unik untuk setiap jadwal pelajaran
    nama_mapel VARCHAR(255),                        -- Nama mata pelajaran, contoh: Matematika
    tanggal DATE,                                   -- Tanggal pelajaran dilaksanakan
    waktu_mulai TIME,                               -- Jam mulai pelajaran
    waktu_selesai TIME                              -- Jam selesai pelajaran
);

-- ===============================
-- TABEL ABSENSI
-- ===============================
CREATE TABLE absensi (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,                          -- ID unik untuk setiap catatan absensi
    siswa_id BIGINT,                                -- Mengacu ke ID siswa yang melakukan absensi (relasi ke tabel siswa)
    mapel_id BIGINT,                                -- Mengacu ke ID jadwal/mapel yang dihadiri (relasi ke tabel jadwal)
    waktu_hadir TIME,                               -- Waktu siswa melakukan absensi (jam saja)
    status ENUM('hadir', 'sakit', 'izin', 'alpha'), -- Status kehadiran: hadir, sakit, izin, atau alpha (tanpa keterangan)
    keterangan TEXT,                                -- Catatan tambahan, misalnya alasan izin
    FOREIGN KEY (siswa_id) REFERENCES siswa(id),    -- Relasi ke tabel siswa (kolom siswa_id)
    FOREIGN KEY (mapel_id) REFERENCES jadwal(id)    -- Relasi ke tabel jadwal (kolom mapel_id)
);

