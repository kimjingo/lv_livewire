<?php
/*
<!-- <div>
    <input wire:model="search" type="text" placeholder="Search...">
    <button wire:click="clear">Clear</button>
    <ul>
        @include('contacts-partial')
    </ul>
</div> -->
*/
?>

<div>
    <div class="row mb-4">
        <div class="col form-inline">
            Per page : &nbsp;
            <select wire:model="perPage" name="form-control" id="">
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
            </select>
        </div>
        <div class="col">
            <input wire:model="search" type="text" class="form-control" placeholder="Search...">
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <a wire:click.prevent="sortBy('name')" role="button" href="#">
                            Name
                            @include('includes._sort-icon', ['field' => 'name'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('email')" role="button" href="#">
                            Email
                            @include('includes._sort-icon', ['field' => 'email'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                            Joined at
                            @include('includes._sort-icon', ['field' => 'created_at'])
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->created_at->format('m-d-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col">
            {{ $contacts->links() }}
        </div>
        <div class="col text-right text-muted">
            Showing {{ $contacts->firstItem() }} to {{ $contacts->lastItem() }} out of {{ $contacts->total() }} results
        </div>
    </div>
</div>