<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Division;
use App\Models\Subdivision;
use App\Models\Library;
use App\Models\Book;
use App\Models\Journal;
use App\Models\JournalIssue;
use App\Models\EResource;

class LibraryCatalogueSeeder extends Seeder

{
    public function run()
    {
        // Create Divisions
        $divisions = [
            'Fiction',
            'Non-Fiction',
            'Reference',
            'Periodicals',
            'Digital Resources',
            'Children\'s',
            'Young Adult'
        ];

        foreach ($divisions as $divisionName) {
            $division = Division::create(['name' => $divisionName]);

            // Create Subdivisions for each Division
            for ($i = 1; $i <= 3; $i++) {
                Subdivision::create([
                    'name' => "$divisionName Subdivision $i",
                    'division_id' => $division->id
                ]);
            }
        }

        // Create Libraries
        $libraries = [
            'Main Branch',
            'East Wing',
            'West Wing',
            'Digital Library'
        ];

        foreach ($libraries as $libraryName) {
            Library::create(['name' => $libraryName]);
        }

        // Create Books
        $books = [
            ['title' => '1984', 'author' => 'George Orwell', 'genre' => 'Dystopian Fiction', 'type' => 'fiction', 'image_url' => 'book_1984.jpg'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee','genre' => 'Southern Gothic', 'type' => 'academic', 'image_url' => 'book_mockingbird.jpg'],
            ['title' => 'A Brief History of Time', 'author' => 'Stephen Hawking','genre' => 'Popular Science', 'type' => 'Non-Fiction', 'image_url' => 'book_brief_history.jpg'],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'genre' => 'Coming-of-age Fiction', 'type' => 'fiction', 'image_url' => 'book_catcher.jpg'],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'genre' => 'Romance', 'type' => 'academic', 'image_url' => 'book_pride.jpg']
        ];

        foreach ($books as $bookData) {
            Book::create([
                'title' => $bookData['title'],
                'author' => $bookData['author'],
                'isbn' => $this->generateISBN(),
                'publication_year' => rand(1900, 2023),
                'genre' => $bookData['genre'],
                'library_id' => Library::inRandomOrder()->first()->id,
                'type' => $bookData['type'],
                'image_url' => $bookData['image_url']
            ]);
        }

        // Create Journals
        $journals = [
            ['title' => 'Nature', 'frequency' => 'Weekly'],
            ['title' => 'Science', 'frequency' => 'Weekly'],
            ['title' => 'The Lancet', 'frequency' => 'Weekly'],
            ['title' => 'National Geographic', 'frequency' => 'Monthly']
        ];

        foreach ($journals as $journalData) {
            $journal = Journal::create([
                'title' => $journalData['title'],
                'issn' => $this->generateISSN(),
                'frequency' => $journalData['frequency'],
                'publisher' => 'Sample Publisher'
            ]);

            // Create Journal Issues
            for ($i = 1; $i <= 4; $i++) {
                JournalIssue::create([
                    'journal_id' => $journal->id,
                    'issue_number' => "Vol. 1 Issue $i",
                    'publication_date' => now()->subMonths($i)
                ]);
            }
        }

        // Create E-Resources
        $eResources = [
            ['title' => 'JSTOR', 'type' => 'Database'],
            ['title' => 'IEEE Xplore', 'type' => 'Database'],
            ['title' => 'Project Gutenberg', 'type' => 'E-books'],
            ['title' => 'Coursera', 'type' => 'Online Courses']
        ];

        foreach ($eResources as $eResourceData) {
            EResource::create([
                'title' => $eResourceData['title'],
                'type' => $eResourceData['type'],
                'url' => 'https://example.com/' . strtolower(str_replace(' ', '', $eResourceData['title'])),
                'access_information' => 'Sample access information'
            ]);
        }
    }

    private function generateISBN()
    {
        return '978' . rand(1000000000, 9999999999);
    }

    private function generateISSN()
    {
        return rand(1000, 9999) . '-' . rand(1000, 9999);
    }
}