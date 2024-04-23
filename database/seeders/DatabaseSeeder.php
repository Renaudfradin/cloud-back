<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Course;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UserBanking;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->withProgressBar(1, fn () => 
            User::factory(1)
                ->has(UserBanking::factory(), 'user_banking')
                ->has(Subscription::factory()->count(2), 'subscription')
                ->has(Course::factory()->count(5)->state(
                    ['category_id' => Category::factory()]
                ), 'courseslist')
                // ->for(Course::factory()->count(5)->state(
                //     ['category_id' => Category::factory()]
                // ), 'courses')
                ->has(Article::factory()->count(1)->state(
                    ['category_id' => ArticleCategory::factory()]
                ))
                ->create([
                    'name' => 'Test User',
                    'email' => 'test@gmail.com',
                ])
            );
        $this->command->info('Admin user created.');

        $this->withProgressBar(1, fn () =>  User::factory(1)
            ->has(UserBanking::factory(), 'user_banking')
            ->has(Subscription::factory()->count(2), 'subscription')
            ->has(Course::factory()->count(5)->state(
                ['category_id' => Category::factory()]
            ), 'courseslist')
            // ->for(Course::factory()->count(5)->state(
            //     ['category_id' => Category::factory()]
            // ), 'courses')
            ->has(Article::factory()->count(1)->state(
                ['category_id' => ArticleCategory::factory()]
            ))
            ->create([
                'name' => 'Renaud Fradin',
                'email' => 'renaud.fradin@eemi.com',
            ]));
        $this->command->info('Admin Renaud created.');

        $this->withProgressBar(1, fn () =>  User::factory(1)
            ->has(UserBanking::factory(), 'user_banking')
            ->has(Subscription::factory()->count(2), 'subscription')
            ->has(Course::factory()->count(5)->state(
                ['category_id' => Category::factory()]
            ), 'courseslist')
            // ->for(Course::factory()->count(5)->state(
            //     ['category_id' => Category::factory()]
            // ), 'courses')
            ->has(Article::factory()->count(5)->state(
                ['category_id' => ArticleCategory::factory()]
            ))
            ->create([
                'name' => 'Ismail Imounane',
                'email' => 'ismail.imounane@eemi.com',
            ]));
        $this->command->info('Admin Ismail created.');

        $this->withProgressBar(1, fn () => User::factory(1)
            ->has(UserBanking::factory(), 'user_banking')
            ->has(Subscription::factory()->count(2), 'subscription')
            ->has(Course::factory()->count(5)->state(
                ['category_id' => Category::factory()]
            ), 'courseslist')
            // ->for(Course::factory()->count(5)->state(
            //     ['category_id' => Category::factory()]
            // ), 'courses')
            ->has(Article::factory()->count(1)->state(
                ['category_id' => ArticleCategory::factory()]
            ))
            ->create([
                'name' => 'Sabrine Sefi',
                'email' => 'sabrine.sefi@eemi.com',
            ]));
        $this->command->info('Admin Sabrine created.');

        User::factory(2000)
            ->has(UserBanking::factory(), 'user_banking')
            ->has(Subscription::factory()->count(1), 'subscription')
            ->has(Course::factory()->count(5)->state(
                ['category_id' => Category::factory()]
            ), 'courseslist')
            // ->for(Course::factory()->count(5)->state(
            //     ['category_id' => Category::factory()]
            // ), 'courses')
            ->has(Article::factory()->count(1)->state(
                ['category_id' => ArticleCategory::factory()]
            ))
            ->create();
        $this->command->info('Data created.');

        $userCourse = User::factory()->create()->id;
        Course::factory(1000000)
            ->create([
                'category_id' => Category::factory(),
                'teacher_id' => $userCourse,
            ]);
        $this->command->info('Course created.');
    }

    protected function withProgressBar(int $amount, Closure $createCollectionOfOne): Collection
    {
        $progressBar = new ProgressBar($this->command->getOutput(), $amount);

        $progressBar->start();

        $items = new Collection();

        foreach (range(1, $amount) as $i) {
            $items = $items->merge(
                $createCollectionOfOne()
            );
            $progressBar->advance();
        }

        $progressBar->finish();

        $this->command->getOutput()->writeln('');

        return $items;
    }
}
