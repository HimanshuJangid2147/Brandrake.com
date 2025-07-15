{{-- This file contains the form fields for creating and editing portfolio items. --}}

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="e.g., Strategic UX Redesign">
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" placeholder="A brief summary of the project..."></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="case_study_url" class="form-label">Case Study URL</label>
                    <input type="url" id="case_study_url" name="case_study_url" class="form-control" placeholder="https://...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="behance_url" class="form-label">Behance URL</label>
                    <input type="url" id="behance_url" name="behance_url" class="form-control" placeholder="https://...">
                </div>
            </div>
        </div>
         <div class="form-group">
            <label for="cost" class="form-label">Cost String</label>
            <input type="text" id="cost" name="cost" class="form-control" placeholder="e.g., from 450 000 €">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="mockup_image" class="form-label">Mockup Image</label>
            <input type="file" id="mockup_image" name="mockup_image" class="form-control">
        </div>
        <div class="form-group">
            <label for="background_video" class="form-label">Background Video (Optional)</label>
            <input type="file" id="background_video" name="background_video" class="form-control">
        </div>
        <div class="form-group">
            <label for="style" class="form-label">Style</label>
            <select id="style" name="style" class="form-control">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
        </div>
    </div>
</div>

<hr class="my-4">

<div class="d-flex justify-content-end">
    <a href="#" class="btn btn-secondary me-2">Cancel</a>
    <button type="submit" class="btn btn-primary">Save Portfolio Item</button>
</div>
