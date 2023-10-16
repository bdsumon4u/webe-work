<div class="container px-4 pt-6 mx-auto lg:px-8 lg:pt-8 xl:max-w-7xl">
    <div class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-left">
        <div class="grow">
            <h1 class="mb-1 text-xl font-bold"><?= isset($_GET['query']) ? 'Search Result' :'Quick Overview' ?></h1>
            <h2 class="text-sm font-medium text-slate-500">
                <?php if(isset($_GET['query'])): ?>
                    Searching for <span class="font-semibold text-slate-700">"<?= $_GET['query'] ?>"</span>
                <?php else: ?>
                    Your favorite books and movies
                <?php endif; ?>
            </h2>
        </div>
        <div class="flex items-center justify-center flex-none px-2 space-x-2 rounded sm:justify-end sm:bg-transparent sm:px-0">
            <a href="/books/add.php" class="inline-flex items-center justify-center px-3 py-2 space-x-1 text-sm font-semibold leading-5 text-white border rounded-lg border-violet-700 bg-violet-700 hover:border-violet-600 hover:bg-violet-600 hover:text-white focus:ring focus:ring-violet-400 focus:ring-opacity-50 active:border-violet-700 active:bg-violet-700">
                <span>New Book</span>
            </a>
        </div>
    </div>
    <hr class="mt-6 lg:mt-8" />
</div>