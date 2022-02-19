ALTER TABLE `tb_laporan`
	ADD COLUMN `jenis_laporan` VARCHAR(50) NULL DEFAULT NULL AFTER `jenis_pelanggaran`;

	ALTER TABLE `tb_laporan`
	CHANGE COLUMN `status` `status` VARCHAR(250) NULL DEFAULT NULL AFTER `bukti`;

	ALTER TABLE `tb_laporan`
	ADD COLUMN `asal_laporan` VARCHAR(50) NULL DEFAULT NULL AFTER `jenis_laporan`;
ALTER TABLE `tb_jenis_pelanggaran`
	CHANGE COLUMN `jenis_pelanggaran` `jenis_pelanggaran` TEXT NULL DEFAULT NULL AFTER `id`;


