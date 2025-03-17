<?php

namespace App\Livewire\About;

use App\Models\AboutData;
use App\Models\CvPdf;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Mary\Traits\Toast;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class About extends Component
{
    use Toast;

    public function download(): ?BinaryFileResponse
    {
        $pdf = CvPdf::query()->whereNotNull('file_path')->first();

        if (!$pdf) {
            return $this->error('Resume not found', position: 'toast-top toast-center');
        }

        $this->success('Resume Downloaded', position: 'toast-top toast-center');

        return response()->download(Storage::disk('public')->path($pdf->file_path));
    }

    public function render()
    {
        $about_data = AboutData::query()->whereNotNull('about_text')->first();

        return view('livewire.pages.about.index', [
            'about_text' => $about_data?->about_text,
            'user' => User::query()->firstWhere('is_admin', 1),
        ])->layout('layouts.main');
    }
}
