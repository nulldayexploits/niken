ALTER TABLE `tb_laporan`
	ADD COLUMN `jenis_laporan` VARCHAR(50) NULL DEFAULT NULL AFTER `jenis_pelanggaran`;

	ALTER TABLE `tb_laporan`
	CHANGE COLUMN `status` `status` VARCHAR(250) NULL DEFAULT NULL AFTER `bukti`;

