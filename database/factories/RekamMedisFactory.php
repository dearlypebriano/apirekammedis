<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'No_RM' => fake()->numberBetween(1, 100),
            'nama_pasien' => fake()->name(),
            'alamat' => fake()->address(),
            'tgl_kunjungan' => fake()->date(),
            'umur' => fake()->numberBetween(1, 100),
            'jenis_kelamin' => fake()->randomElement(['Laki-Laki (L)', 'Perempuan (P)']),
            'tanggal_lahir' => fake()->date(),
            'nama_klinik' => fake()->name(),
            'no_billing' => fake()->numberBetween(1, 100),
            'dpjp' => fake()->name(),
            'jenis_pembayaran' => fake()->randomElement(['Data Pendaftaran', 'Status Pembayaran', 'Riwayat Pasien', 'Penunjang', 'Resep', 'DPJP', 'File SEP']),
            'history_pasien' => fake()->randomElement(['Data Pendaftaran', 'Status Pelayanan', 'Riwayat Pasien', 'Penunjang', 'Resep', 'DPJP', 'File SEP']),
            'billing_pasien' => fake()->randomElement(['Tarif Tindakan', 'Tarif Tindakan Paket']),
        ];
    }
}
