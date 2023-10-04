<div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
        <form class="space-y-6" action="/process.php" method="POST">
            <input type="hidden" name="table" value="movies">
            <h3 class="text-2xl font-semibold text-center border font-roboto-mono small-caps">Movie Information</h3>
            <div class="grid grid-cols-4 gap-x-3">
                <div class="col-span-3">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <input id="title" name="title" type="text" value="<?= $movie['title'] ?? null ?>" autocomplete="title" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-1">
                    <label for="year" class="block text-sm font-medium leading-6 text-gray-900">Year</label>
                    <div class="mt-2">
                        <input id="year" name="year" type="number" value="<?= $movie['year'] ?? null ?>" autocomplete="year" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-x-3">
                <div class="col-span-3">
                    <label for="director" class="block text-sm font-medium leading-6 text-gray-900">Director</label>
                    <div class="mt-2">
                        <input id="director" name="director" type="text" value="<?= $movie['director'] ?? null ?>" autocomplete="director" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Duration</label>
                    <div class="mt-2">
                        <input id="duration" name="duration" type="text" value="<?= $movie['duration'] ?? null ?>" autocomplete="duration" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" name="edit" value="<?= $_REQUEST['index'] ?? null ?>" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold font-roboto-mono leading-6 text-gray-200 shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?= isset($movie) ? 'Update' : 'Submit'; ?> Movie</button>
            </div>
        </form>
    </div>
</div>