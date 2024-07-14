// pages/Post.jsx

// Import necessary dependencies
import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import PostCard from "@/Components/PostCard";
import { Head, usePage } from "@inertiajs/react";

// Define the functional component Post
const Post = ({ auth, posts }) => {
    // Extract the 'title' prop from the page context using usePage().props
    const { title } = usePage().props; // 'title' is passed from Laravel

    return (
        <AuthenticatedLayout
            user={auth.user} // Pass the authenticated user object to the layout
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Posts
                </h2>
            }
        >
            {/* Set the document title dynamically */}
            <Head title={title} />

            {/* Render the list of posts using PostCard component */}
            <div className="py-6">
                <div className="max-w-3xl mx-auto">
                    {posts.map((post) => (
                        <PostCard key={post.id} post={post} />
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

// Export the Post component as the default export
export default Post;
