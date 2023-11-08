<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    public function run() {
        $types = [
            '一般',
            '火',
            '水',
            '草',
            '電',
            '冰',
            '飛行',
            '蟲',
            '毒',
            '岩石',
            '地面',
            '幽靈',
            '鋼',
            '超能力',
            '龍',
            '惡',
            '妖精',
            '格鬥'
        ];

        // 跟蹤已生成的組合數
        $combinationsGenerated = 0;

        for ($i = 0; $i < count($types); $i++) {
            $type = $types[$i];

            for ($j = 0; $j < count($types); $j++) {
                $superEffectiveTypes = $this->generateRandomTypes($types, $type, 5);
                $notVeryEffectiveTypes = $this->generateRandomTypes($types, $type, 7);
                $randomNotEffective = $this->generateRandomTypes($types, $type, 3);
                $typess = $this->generateRandomTypes($types, $type, 4);

                DB::table('types')->insert([
                    'types' => $typess[0] ?? '',
                    'super_effective1' => $superEffectiveTypes[0] ?? '',
                    'super_effective2' => $superEffectiveTypes[1] ?? '',
                    'super_effective3' => $superEffectiveTypes[2] ?? '',
                    'super_effective4' => $superEffectiveTypes[3] ?? '',
                    'super_effective5' => $superEffectiveTypes[4] ?? '',
                    'not_very_effective1' => $notVeryEffectiveTypes[0] ?? '',
                    'not_very_effective2' => $notVeryEffectiveTypes[1] ?? '',
                    'not_very_effective3' => $notVeryEffectiveTypes[2] ?? '',
                    'not_very_effective4' => $notVeryEffectiveTypes[3] ?? '',
                    'not_very_effective5' => $notVeryEffectiveTypes[4] ?? '',
                    'not_very_effective6' => $notVeryEffectiveTypes[5] ?? '',
                    'not_very_effective7' => $notVeryEffectiveTypes[6] ?? '',
                    'not_effective' => $randomNotEffective[0] ?? '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $combinationsGenerated++;

                if ($combinationsGenerated >= 50) {
                    // 已生成50個組合，退出迴圈
                    break 2;
                }
            }
        }
    }

    private function generateRandomTypes($types, $currentType, $count) {
        $randomTypes = [];
        while (count($randomTypes) < $count) {
            $randomType = $types[array_rand($types)];
            if ($randomType !== $currentType && !in_array($randomType, $randomTypes)) {
                $randomTypes[] = $randomType;
            }
        }
        return $randomTypes;
    }

    private function truncateToMaxLength($array, $maxLength) {
        return array_map(function ($value) use ($maxLength) {
            return substr($value, 0, 50);
        }, $array);
    }
}
