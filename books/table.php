<?php $books = get_table('books') ?>
<div class="flex flex-col bg-white border rounded-lg md:col-span-3">
    <div class="flex flex-col items-center justify-between gap-4 p-3 text-center border-b border-slate-100 sm:flex-row sm:text-left">
        <div>
            <h2 class="mb-0.5 font-semibold">Book List</h2>
        </div>
        <div>
            <a href="/books/add.php" class="inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 bg-white border rounded-lg border-slate-200 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                Add New Book
            </a>
        </div>
    </div>
    <div class="p-5">
        <!-- Responsive Table Container -->
        <div class="min-w-full overflow-x-auto rounded">
            <!-- Alternate Responsive Table -->
            <table class="min-w-full text-sm align-middle">
                <!-- Table Header -->
                <thead>
                    <?php if (count($books)) : ?>
                        <tr class="border-b-2 border-slate-100">
                            <th class="min-w-[180px] py-2 pr-3 text-left text-sm font-semibold uppercase tracking-wider text-slate-700">
                                Title
                            </th>
                            <th class="min-w-[180px] px-3 py-2 text-left text-sm font-semibold uppercase tracking-wider text-slate-700">
                                Year
                            </th>
                            <th class="min-w-[180px] px-3 py-2 text-left text-sm font-semibold uppercase tracking-wider text-slate-700">
                                Author
                            </th>
                            <th class="min-w-[180px] px-3 py-2 text-left text-sm font-semibold uppercase tracking-wider text-slate-700">
                                Publisher
                            </th>
                            <th class="min-w-[100px] py-2 pl-3 text-right text-sm font-semibold uppercase tracking-wider text-slate-700">
                                Actions
                            </th>
                        </tr>
                    <?php else : ?>
                        <tr>
                            <td class="py-3 pr-3 font-bold text-center text-red-600 border-2">
                                No books found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </thead>
                <!-- END Table Header -->

                <!-- Table Body -->
                <tbody>
                    <?php $index = 0 ?>
                    <?php foreach ($books as $book) : ?>
                        <tr class="border-b border-slate-100">
                            <td class="py-2 pr-3 text-left text-slate-600">
                                <?= $book['title'] ?>
                            </td>
                            <td class="p-2">
                                <?= $book['year'] ?>
                            </td>
                            <td class="p-2 font-medium text-slate-600">
                                <?= $book['author'] ?>
                            </td>
                            <td class="p-2 text-left">
                                <?= $book['publisher'] ?>
                            </td>
                            <td class="py-2 pl-3 font-medium text-right">
                                <form action="/delete.php" method="POST">
                                    <a href="/books/edit.php?index=<?= $index ?>" class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                        <span>Edit</span>
                                        <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <input type="hidden" name="index" value="<?= $index ?>">
                                    <button type="submit" class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                        <span class="hover:text-red-600">Delete</span>
                                        <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-red-600 group-active:translate-x-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php $index++ ?>
                    <?php endforeach; ?>
                </tbody>
                <!-- END Table Body -->
            </table>
            <!-- END Alternate Responsive Table -->
        </div>
        <!-- END Responsive Table Container -->
    </div>
</div>